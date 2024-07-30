<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\RequestException;
use App\Models\Investment;
use Illuminate\Http\Request;
use App\Models\Nft_Trading;
use App\Models\Package;
use App\Models\Trade;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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
            $response = $client->request('GET', 'https://api.opensea.io/api/v2/events', [
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

    public function submitnft(Request $request)
    {
        // Validate the request
        $request->validate([
            'nft_id' => 'required',
        ]);
    
        $user = Auth::user();
        $nft_id = $request->input('nft_id');
        // dd($request->nft_image);
    
        // Check if the user has made a purchase in the last 24 hours
        $lastPurchase = Trade::where('buyer_id', $user->username)
            ->latest('created_at')
            ->first();
    
        if ($lastPurchase && $lastPurchase->created_at->diffInHours(now()) < 24) {
            return redirect()->back()->with('error', 'You can only buy one NFT every 24 hours.');
        }
    
        // Find the NFT and update its status
        // $nft = Nft_Trading::find($nft_id);
        // if (!$nft) {
        //     return redirect()->back()->with('error', 'NFT not found.');
        // }
    
        // Update the NFT status
        // $nft->status = 'Pending';
        // $nft->save();
    
        // Create a new trade record
        Trade::create([
            'nft_id' => $request->nft_id,
            'name' => $request->nft_name,
            'nft_image' => $request->nft_image,
            'status' => 'Pending',
            'currency' => 'USDT',
            'buyer_id' => $user->username,
        ]);
    
        // Redirect with success message
        return redirect()->back()->with('success', 'Your NFT is being purchased successfully. You can buy another NFT after 24 hours.');
    }
    

    public function investamount()
{
    $user = Auth::user();   
    $iamount = Package::all();
    $client = new Client();
    $response = $client->request('GET', 'https://api.opensea.io/api/v2/events', [
        'headers' => [
            'accept' => 'application/json',
            'x-api-key' => '1e27b181b4bd49ee81032d7165fd1613',
        ],                
    ]);

    $body = $response->getBody();            
    // Decode the JSON response
    $nfts = json_decode($body, true);
    // dd($nfts);
    
    $nftsData = isset($nfts['asset_events']) ? $nfts['asset_events'] : [];

    
    $pamount = Investment::where('user_id', $user->id)->where('status', 'active')->sum('amount');
    $lastTrade = Trade::where('buyer_id', $user->username)->latest('created_at')->first();
    
    
    // dd($nfts);
    $nftimg = null;

    if ($lastTrade) {
        // Fetch the NFT associated with the last trade
        $nftd = Trade::where('nft_id', $lastTrade->nft_id)->first();
        // if ($nftd->status=="Approved") {
            
        // }
    }

    else{        
        Log::info("You do Not have any NFT: ");

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

    $this->data['iamount'] = $iamount;
    $this->data['pamount'] = $pamount;
    $this->data['nfts'] = $nftsData;
    $this->data['nftd'] = $nftd;    
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
    
        // Update status in the Nft_Trading table
        $nftTrading = Nft_Trading::find($request->nft_id);
        if ($nftTrading) {
            $nftTrading->status = 'Approved';
            $nftTrading->save();
        }
    
        // Update status in the Trade table where buyer_id matches the logged-in user's username
        $trade = Trade::where('nft_id', $request->nft_id)->first();
            // dd($trade);
        if ($trade) {
            $trade->status = 'Approved';
            $trade->save();
            return back()->with("Your NFT Sell Sucessfully");
        }
    
        return back()->with('error', 'Failed to update NFT status.');
    }
    

    // public function fatchtime(){

    //     $user= Auth::user();
    //     $laste = Trade::where('buyer_id', $user->username)
    //         ->latest('created_at')
    //         ->first();
    // }




}
