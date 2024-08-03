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
            dd($nfts);    
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

    public function getBalance($userId)
{
    $investments = Investment::where('user_id', $userId)->where('status', 'Active')->sum('amount') ?? 0;
    $incomes = Income::where('user_id', $userId)->sum('comm') ?? 0;
    $withdrawals = Withdraw::where('user_id', $userId)
        ->where('status', '!=', 'Failed')
        ->sum('amount') ?? 0;


    return $investments + $incomes - $withdrawals;
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
            $balance = round($this->getBalance($user->id), 2) ?? 0;
    
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
    $this->data['countdownTime'] = $countdownTime; // Pass the remaining time to the view
    $this->data['page'] = 'user.trading.nft_view';

    return $this->dashboard_layout();
}


    // NftController.php
    public function sellnft(Request $request)
    {
        // dd($request->all());
        // Validate the request
        $request->validate([
            // 'nft_id' => 'required|integer|exists:nfts,id',
            'status' => 'required|in:Approved',
        ]);
        $user= Auth::user();
        
    
        // Update status in the Trade table where buyer_id matches the logged-in user's username
        $trade = Trade::where('status', 'Pending')->where('user_id', $user->id)->latest('created_at')->first();
            // dd($trade);
        if ($trade) {
            $trade->status = 'Approved'; 
            $trade->save();
            return back()->with("Your NFT Sell Sucessfully");
        }
    
        return back()->with('error', 'Failed to update NFT status.');
    }
    
    // public function sharenft()
    // {
    //     return view('user.trading.nftshare');
    // }
    

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
