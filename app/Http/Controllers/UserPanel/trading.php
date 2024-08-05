<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\RequestException;
use App\Models\Investment;
use Illuminate\Http\Request;
// use App\Models\Nft_Trading;
use App\Models\User;
use App\Models\Package;
use App\Models\Trade;
use App\Models\Income;
use App\Models\Withdraw;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\Response;

class trading extends Controller
{
    //
    public function nftview(){
        return view('user.trading.nft_view');

    }

    public function index()
    {
        $client = new Client();

        try {
            // Make the API request
            $response = $client->request('GET', 'https://api.opensea.io/api/v2/events?event_type=sale&limit=1', [
                'headers' => [
                    'accept' => 'application/json',
                    'x-api-key' => '1e27b181b4bd49ee81032d7165fd1613',
                ],                
            ]);
    
            // Check the status code
            if ($response->getStatusCode() !== 200) {
                Log::error('API request failed with status code: ' . $response->getStatusCode());
                return view('user.trading.nft_view')->withErrors(['error' => 'Failed to fetch data']);
            }    
            // Get the response body
            $body = $response->getBody();            
            // Decode the JSON response
            $nfts = json_decode($body, true);
            // Pass the data to the Blade view
            return view('user.trading.nft_view', compact('nfts'));
    
        } catch (RequestException $e) {
            // Handle request errors
            Log::error('Error fetching NFT data: ' . $e->getMessage());
    
            if ($e->hasResponse()) {
                Log::error('Response body: ' . $e->getResponse()->getBody());
            }
    
            // Pass error to Blade view
            return view('user.trading.nft_view')->withErrors(['error' => 'An error occurred while fetching data']);
        }
    }

    public function my_level_team_count($userid,$level=10){
        $arrin=array($userid);
        $ret=array();

        $i=1;
        while(!empty($arrin)){
            $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();
            if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[$i]=$arrin;
                $i++;

                if ($i>$level) {
                  break;
                 }

            }else{
                $arrin = array();
            }
        }

        // $final = array();
        // if(!empty($ret)){
        //     array_walk_recursive($ret, function($item, $key) use (&$final){
        //         $final[] = $item;
        //     });
        // }


        return $ret;

    }

    

    public function submitnft(Request $request)
    {
        try {
            // Validate the request
            $request->validate([
                'nft_id' => 'required',
                'nft_price' => 'required|numeric',
                'nft_symbol' => 'required|string',
                'nft_name' => 'required|string',
                'nft_image' => 'required|string'
            ]);

            
            $user = Auth::user();
            $nft_id = $request->input('nft_id');
            $priceInWei = $request->input('nft_price');
            $priceInEther = $priceInWei / pow(10, 18); // Convert Wei to Ether
            $symbol = $request->input('nft_symbol');
            $creator = $request->input('creator');
            $buyer = $request->input('buyer');
            $seller = $request->input('seller');
            $opensea_url= $request->input('opensea_url');
            $orderNumber = str_pad(rand(100000, 99999999), 8, '0', STR_PAD_LEFT);

    
            // Calculate the user's team details
            $my_level_team = $this->my_level_team_count($user->id);
            $gen_team1 = array_key_exists(1, $my_level_team) ? $my_level_team[1] : [];
            $gen_team2 = array_key_exists(2, $my_level_team) ? $my_level_team[2] : [];
            $gen_team3 = array_key_exists(3, $my_level_team) ? $my_level_team[3] : [];
    
            $gen_team1 = User::whereIn('id', $gen_team1)->orderBy('id', 'DESC')->get();
            $gen_team2 = User::whereIn('id', $gen_team2)->orderBy('id', 'DESC')->get();
            $gen_team3 = User::whereIn('id', $gen_team3)->orderBy('id', 'DESC')->get();
    
            $active_gen_team1total = $gen_team1->where('active_status', 'Active')->count();
            $active_gen_team2total = $gen_team2->where('active_status', 'Active')->count();
            $active_gen_team3total = $gen_team3->where('active_status', 'Active')->count();
    
            $total = $active_gen_team1total + $active_gen_team2total;
            $userDirect = User::where('sponsor', $user->id)->where('active_status', 'Active')->where('package', '>=', 30)->count();
            $balance = round($user->available_balance(), 2) ?? 0;
    
            $vip = 0;
            if ($balance >= 50 && $balance < 500) {
                $vip = ($userDirect >= 1) ? 1 : 0;
            } elseif ($balance >= 500 && $balance < 2000) {
                $vip = ($userDirect >= 3 && $total >= 5) ? 2 : 1;
            } elseif ($balance >= 2000 && $balance < 5000) {
                if ($userDirect >= 6 && $total >= 20) {
                    $vip = 3;
                } elseif ($userDirect >= 3 && $total >= 5) {
                    $vip = 2;
                } else {
                    $vip = 1;
                }
            } elseif ($balance >= 5000) {
                if ($userDirect >= 15 && $total >= 35) {
                    $vip = 4;
                } elseif ($userDirect >= 6 && $total >= 20) {
                    $vip = 3;
                } elseif ($userDirect >= 3 && $total >= 5) {
                    $vip = 2;
                } else {
                    $vip = 1;
                }
            }
    
            // Check if the user has made a purchase in the last 24 hours
            $lastPurchase = Trade::where('user_id', $user->id)
                ->latest('created_at')
                ->first();
    
            if ($lastPurchase && $lastPurchase->created_at->diffInHours(now()) < 24) {
                return response()->json(['error' => 'You can only buy one NFT every 24 hours.'], 400);
            }
    
            // Log info about the new trade
            Log::info("User {$user->username} is buying NFT with ID {$nft_id}, price {$priceInEther}, and symbol {$symbol}.");
    
            // Create a new trade record
            Trade::create([
                'nft_id' => $nft_id,
                'name' => $request->input('nft_name'),
                'nft_image' => $request->input('nft_image'),
                'symbol' => $symbol,
                'creator' => $creator,
                'user_id' => $user->id,
                'seller_id' => $seller,
                'vip' => $vip,
                'price' => $priceInEther, // Store the price in Ether
                'status' => 'Pending',
                'currency' => 'USDT',
                'buyer_id' =>$buyer,
                'opensea_url' =>$opensea_url,
                'order_no'=>$orderNumber,
            ]);
    
            // Redirect with success message
            return response()->json(['success' => 'Your NFT is being purchased successfully. You can buy another NFT after 24 hours.']);
        } catch (\Exception $e) {
            // Log error
            Log::error("Error purchasing NFT: {$e->getMessage()}", [
                'user_id' => $user->id ?? null,
                'nft_id' => $nft_id ?? null,
                'request_data' => $request->all()
            ]);
    
            // Return error response with the actual error message
            return response()->json(['error' => 'An error occurred while processing your request. Please try again later. Error: ' . $e->getMessage()], 500);
        }
    }

    
    

    public function investamount()
{
   
    $user = Auth::user(); 
    $income = Income::where('user_id', $user->id)->where('remarks','Trade Income') ->latest('created_at')
                ->first();
                if ($income) {
                    $rincome = Package::where('vip', $income->invest_id)
                                      ->latest('created_at')
                                      ->first();
                } else {
                    // Handle the case where $income is null
                    $rincome = null; // or some default value, e.g., 0
                }
 
    // $iamount = Package::all();
    $client = new Client();
    $response = $client->request('GET', 'https://api.opensea.io/api/v2/events?event_type=sale&limit=6', [
        'headers' => [
            'accept' => 'application/json',
            'x-api-key' => '1e27b181b4bd49ee81032d7165fd1613',
        ],                
    ]);

    $body = $response->getBody();            
    // Decode the JSON response
    $nfts = json_decode($body, true);
    
    $filteredNftsLatest = array_filter($nfts['asset_events'], function($nft) {
        return !empty($nft['nft']['image_url']);
      });

    
    $nftsData = $filteredNftsLatest;

    // dd($nftsData);
    
    $pamount = Investment::where('user_id', $user->id)->where('status', 'active')->sum('amount');
    $lastTrade = Trade::where('user_id', $user->id)->latest('created_at')->first();

    $nftd = null;

    // Check if the Trade table is empty or if there are no trades for the user
    if (!$lastTrade) {
        Log::info("No trades found for the user: " . $user->username);
        $nftd = null;
        // $nftsData = [];
    } else {
        $nftd = Trade::where('user_id', $user->id)->latest('created_at')->first();

        if (!$nftd) {
            Log::info("No NFT found for the last trade with ID: " . $lastTrade->nft_id);
            $nftd = null;
        }
    }
    $nftall = Trade::where('user_id', $user->id)->latest('created_at')
    ->paginate(10);

    // Calculate the remaining time
    $currentTime = now();
    $countdownTime = null;

    if ($lastTrade) {
        $purchaseTime = $lastTrade->created_at;
        $differenceInHours = $purchaseTime->diffInHours($currentTime);

        // If less than 24 hours, calculate remaining time
        if ($differenceInHours < 24) {
            $remainingTimeInSeconds = (24 - $differenceInHours) * 3600 - $currentTime->diffInSeconds($purchaseTime);
            $countdownTime = $remainingTimeInSeconds;
        }
    }

    // $this->data['iamount'] = $iamount;
    $this->data['pamount'] = $pamount;
    $this->data['nfts'] = $nftsData;
    $this->data['nftd'] = $nftd??""; 
    $this->data['nftall'] = $nftall; 
    $this->data['rincome'] = $rincome;
    $this->data['roi'] = $income;   
    $this->data['countdownTime'] = $countdownTime; // Pass the remaining time to the view
    $this->data['page'] = 'user.trading.nft_view';

    return $this->dashboard_layout();
}


    // NftController.php
    public function sellNft(Request $request)
    {
        // Validate the request
        $request->validate([
            'status' => 'required|in:Approved',
        ]);
    
        $user = Auth::user();
    
        // Update status in the Trade table where buyer_id matches the logged-in user's username
        $trade = Trade::where('status', 'Pending')->where('user_id', $user->id)->latest('created_at')->first();
        if ($trade) {
            $trade->status = 'Approved';
            $trade->save();


            Log::info('Generating ROI for user ID: ' . $user->id);

            // Calculate the user's team details
            $my_level_team = $this->my_level_team_count($user->id);
            $gen_team1 = array_key_exists(1, $my_level_team) ? $my_level_team[1] : [];
            $gen_team2 = array_key_exists(2, $my_level_team) ? $my_level_team[2] : [];
            $gen_team3 = array_key_exists(3, $my_level_team) ? $my_level_team[3] : [];

            $gen_team1 = User::whereIn('id', $gen_team1)->orderBy('id', 'DESC')->get();
            $gen_team2 = User::whereIn('id', $gen_team2)->orderBy('id', 'DESC')->get();
            $gen_team3 = User::whereIn('id', $gen_team3)->orderBy('id', 'DESC')->get();

            $active_gen_team1total = $gen_team1->where('active_status', 'Active')->count();
            $active_gen_team2total = $gen_team2->where('active_status', 'Active')->count();
            $active_gen_team3total = $gen_team3->where('active_status', 'Active')->count();

            $total = $active_gen_team1total + $active_gen_team2total;
            $userDirect = User::where('sponsor', $user->id)
                ->where('active_status', 'Active')
                ->where('package', '>=', 30)
                ->count();

            // Use the updated getBalance function
            $balance = round($this->getBalance($user->id), 2);
            Log::info('User balance: ' . $balance);

            // Determine VIP level
            $vip = 1;
            if ($balance >= 50 && $balance < 500) {
                $vip = ($userDirect >= 1) ? 1 : 1;
            } elseif ($balance >= 500 && $balance < 2000) {
                $vip = ($userDirect >= 3 && $total >= 5) ? 2 : 1;
            } elseif ($balance >= 2000 && $balance < 5000) {
                if ($userDirect >= 6 && $total >= 20) {
                    $vip = 3;
                } elseif ($userDirect >= 3 && $total >= 5) {
                    $vip = 2;
                } else {
                    $vip = 1;
                }
            } elseif ($balance >= 5000) {
                if ($userDirect >= 15 && $total >= 35) {
                    $vip = 4;
                } elseif ($userDirect >= 6 && $total >= 20) {
                    $vip = 3;
                } elseif ($userDirect >= 3 && $total >= 5) {
                    $vip = 2;
                } else {
                    $vip = 1;
                }
            }
            Log::info('Determined VIP level: ' . $vip);

            $package = Package::where('vip', $vip)->first();
            if ($package) {
                Log::info('Package details: ', $package->toArray());

                $roi = $package->roi;
                $comm = $balance * $roi / 100;
                Log::info('Calculated ROI: ' . $roi . ', Commission: ' . $comm);

                $data = [
                    'remarks' => 'Trade Income',
                    'comm' => $comm,
                    'amt' => $balance,
                    'invest_id' => $vip,
                    'level' => 0,
                    'ttime' => Carbon::now(),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'user_id_fk' => $user->username,
                    'user_id' => $user->id
                ];

                Income::create($data);
                Log::info('Income record created: ', $data);

                $this->addLevelIncome($user->id, $comm, $vip);
                Log::info('Level income added');
            } else {
                Log::warning('No package found for VIP level: ' . $vip);
            }




            return back()->with('success', 'Your NFT Sell Successfully');
        }
    
        return back()->with('error', 'Failed to update NFT status.');
    }
    
    public function getBalance($userId)
    {
        // Get active investments of investType 2
        $activeRegistrationBonus = Investment::where('user_id', $userId)
            ->where('status', 'Active')
            ->where('investType', 2)
            ->first();
    
        // Check and update the status if the registration bonus date is older than 3 days
        if ($activeRegistrationBonus) {
            $registrationBonusDate = Carbon::parse($activeRegistrationBonus->sdate);
            if (Carbon::now()->diffInDays($registrationBonusDate) >= 3) {
                $activeRegistrationBonus->status = 'Expired';
                $activeRegistrationBonus->save();
            }
        }
    
        // Calculate the balance
        $investments = Investment::where('user_id', $userId)
            ->where('status', 'Active')
            ->sum('amount') ?? 0;
        $incomes = Income::where('user_id', $userId)
            ->sum('comm') ?? 0;
        $withdrawals = Withdraw::where('user_id', $userId)
            ->where('status', '!=', 'Failed')
            ->sum('amount') ?? 0;
    
        return $investments + $incomes - $withdrawals;
    }
    
    public function generateRoi($user)
    {
        try {
            Log::info('Generating ROI for user ID: ' . $user->id);

            // Calculate the user's team details
            $my_level_team = $this->my_level_team_count($user->id);
            $gen_team1 = array_key_exists(1, $my_level_team) ? $my_level_team[1] : [];
            $gen_team2 = array_key_exists(2, $my_level_team) ? $my_level_team[2] : [];
            $gen_team3 = array_key_exists(3, $my_level_team) ? $my_level_team[3] : [];

            $gen_team1 = User::whereIn('id', $gen_team1)->orderBy('id', 'DESC')->get();
            $gen_team2 = User::whereIn('id', $gen_team2)->orderBy('id', 'DESC')->get();
            $gen_team3 = User::whereIn('id', $gen_team3)->orderBy('id', 'DESC')->get();

            $active_gen_team1total = $gen_team1->where('active_status', 'Active')->count();
            $active_gen_team2total = $gen_team2->where('active_status', 'Active')->count();
            $active_gen_team3total = $gen_team3->where('active_status', 'Active')->count();

            $total = $active_gen_team1total + $active_gen_team2total;
            $userDirect = User::where('sponsor', $user->id)
                ->where('active_status', 'Active')
                ->where('package', '>=', 30)
                ->count();

            // Use the updated getBalance function
            $balance = round($this->getBalance($user->id), 2);
            Log::info('User balance: ' . $balance);

            // Determine VIP level
            $vip = 0;
            if ($balance >= 50 && $balance < 500) {
                $vip = ($userDirect >= 1) ? 1 : 0;
            } elseif ($balance >= 500 && $balance < 2000) {
                $vip = ($userDirect >= 3 && $total >= 5) ? 2 : 1;
            } elseif ($balance >= 2000 && $balance < 5000) {
                if ($userDirect >= 6 && $total >= 20) {
                    $vip = 3;
                } elseif ($userDirect >= 3 && $total >= 5) {
                    $vip = 2;
                } else {
                    $vip = 1;
                }
            } elseif ($balance >= 5000) {
                if ($userDirect >= 15 && $total >= 35) {
                    $vip = 4;
                } elseif ($userDirect >= 6 && $total >= 20) {
                    $vip = 3;
                } elseif ($userDirect >= 3 && $total >= 5) {
                    $vip = 2;
                } else {
                    $vip = 1;
                }
            }
            Log::info('Determined VIP level: ' . $vip);

            $package = Package::where('vip', $vip)->first();
            if ($package) {
                Log::info('Package details: ', $package->toArray());

                $roi = $package->roi;
                $comm = $balance * $roi / 100;
                Log::info('Calculated ROI: ' . $roi . ', Commission: ' . $comm);

                $data = [
                    'remarks' => 'Trade Income',
                    'comm' => $comm,
                    'amt' => $balance,
                    'invest_id' => $vip,
                    'level' => 0,
                    'ttime' => Carbon::now(),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'user_id_fk' => $user->username,
                    'user_id' => $user->id
                ];

                Income::create($data);
                Log::info('Income record created: ', $data);

                $this->addLevelIncome($user->id, $comm, $vip);
                Log::info('Level income added');
            } else {
                Log::warning('No package found for VIP level: ' . $vip);
            }
        } catch (\Exception $e) {
            // Log the exception message
            Log::error('Error generating ROI for user ID ' . $user->id . ': ' . $e->getMessage());
        }
    }

    
    private function determineVipLevel($balance, $userDirect, $total)
    {
        if ($balance >= 50 && $balance < 500) {
            return ($userDirect >= 1) ? 1 : 0;
        } elseif ($balance >= 500 && $balance < 2000) {
            return ($userDirect >= 3 && $total >= 5) ? 2 : 1;
        } elseif ($balance >= 2000 && $balance < 5000) {
            if ($userDirect >= 6 && $total >= 20) {
                return 3;
            } elseif ($userDirect >= 3 && $total >= 5) {
                return 2;
            } else {
                return 1;
            }
        } elseif ($balance >= 5000) {
            if ($userDirect >= 15 && $total >= 35) {
                return 4;
            } elseif ($userDirect >= 6 && $total >= 20) {
                return 3;
            } elseif ($userDirect >= 3 && $total >= 5) {
                return 2;
            } else {
                return 1;
            }
        }
    }
    
    public function addLevelIncome($id, $amt, $vip)
    {
        $data = User::where('id', $id)->orderBy('id', 'desc')->first();
        $user_id = $data->username;
        $fullname = $data->name;
    
        $rname = $data->username;
        $user_mid = $data->id;
    
        $cnt = 1;
        $amount = $amt / 100;
    
        $multipliers = [
            1 => [12, 7, 5],
            2 => [13, 6, 3],
            3 => [15, 7, 5],
            4 => [18, 9, 8]
        ];
    
        $current_multipliers = $multipliers[$vip] ?? [12, 7, 5]; // Default to VIP 1 multipliers if VIP level is invalid
    
        while ($user_mid != "" && $user_mid != "1") {
            $Sposnor_id = User::where('id', $user_mid)->orderBy('id', 'desc')->first();
            $sponsor = $Sposnor_id->sponsor;
    
            if (!empty($sponsor)) {
                $Sposnor_status = User::where('id', $sponsor)->orderBy('id', 'desc')->first();
                $Sposnor_cnt = User::where('sponsor', $sponsor)->where('active_status', 'Active')->count("id");
                $sp_status = $Sposnor_status->active_status;
                $rank = $Sposnor_status->rank;
                $lastPackage = \DB::table('investments')->where('user_id', $Sposnor_status->id)->where('status', 'Active')->orderBy('id', 'DESC')->limit(1)->first();
                $plan = ($lastPackage) ? $lastPackage->plan : 0;
            } else {
                $Sposnor_status = array();
                $sp_status = "Pending";
                $Sposnor_cnt = 0;
                $rank = 0;
            }
    
            $pp = 0;
            if ($sp_status == "Active") {
                if ($cnt == 1) {
                    $pp = $amount * $current_multipliers[0];
                } elseif ($cnt == 2) {
                    $pp = $amount * $current_multipliers[1];
                } elseif ($cnt == 3) {
                    $pp = $amount * $current_multipliers[2];
                }
            } else {
                $pp = 0;
            }
    
            $user_mid = @$Sposnor_status->id;
            $spid = @$Sposnor_status->id;
            $idate = date("Y-m-d");
    
            $user_id_fk = $sponsor;
            if ($spid > 0 && $cnt <= 3) {
                if ($pp > 0) {
                    $data = [
                        'user_id' => $user_mid,
                        'user_id_fk' => $Sposnor_status->username,
                        'amt' => $amt,
                        'comm' => $pp,
                        'level' => $cnt,
                        'remarks' => "Level Income",
                        'ttime' => Carbon::now(),
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
    
                    Income::create($data);
                }
            }
    
            $cnt++;
        }
    }
    

    public function sharenft()
{
    // Fetch the most recent trade data
    $user = Auth::user();
    $nftd = Trade::where('user_id', $user->id)->latest('created_at')->first();

    // Render the Blade view with dynamic data
    return view('user.trading.nftshare', ['nftd' => $nftd]);

    // Save the screenshot to the storage
    // $screenshotPath = storage_path('app/public/screenshot.png');
    // Browsershot::html($view)
    //     ->windowSize(1280, 720)  // Set the desired width and height
    //     ->waitUntilNetworkIdle()
    //     ->save($screenshotPath);

    // // Return the screenshot path or perform further actions
    // return response()->download($screenshotPath);
}

public function upload(Request $request)
    {
        $imageData = $request->input('image');
        $image = str_replace('data:image/png;base64,', '', $imageData);
        $image = str_replace(' ', '+', $image);
        $imageName = time() . '.png';
        $filePath = public_path('images/') . $imageName;
        file_put_contents($filePath, base64_decode($image));

        $imageUrl = asset('images/' . $imageName);

        return response()->json(['success' => true, 'url' => $imageUrl]);
    }


}
