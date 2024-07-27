<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\Investment;
use Illuminate\Http\Request;
use App\Models\Nft_Trading;
use App\Models\Package;
use App\Models\Trade;
use Illuminate\Support\Facades\Auth;
class trading extends Controller
{
    //
    public function nftview(){
        return view('user.trading.nft_view');

    }

    public function index()
    {
        // Fetch all NFT trading records
        $nfts = Nft_Trading::all();

        // Pass the data to the Blade view
        return view('user.trading.nft_view', compact('nfts'));
    }

    public function submitnft(Request $request)
    {
        // Validate the request
        $request->validate([
            'nft_id' => 'required|integer|exists:nft_tradings,id',
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
        $nft = Nft_Trading::find($nft_id);
        if (!$nft) {
            return redirect()->back()->with('error', 'NFT not found.');
        }
    
        // Update the NFT status
        $nft->status = 'Pending';
        $nft->save();
    
        // Create a new trade record
        Trade::create([
            'nft_id' => $nft->nft_id,
            'name' => $nft->name,
            'nft_image' => $nft->nft_image,
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
    $nfts = Nft_Trading::all();
    $pamount = Investment::where('user_id', $user->id)->where('status', 'active')->sum('amount');
    $lastTrade = Trade::where('buyer_id', $user->username)->latest('created_at')->first();


    $nftimg = null;

    if ($lastTrade) {
        // Fetch the NFT associated with the last trade
        $nftd = Nft_Trading::where('nft_id', $lastTrade->nft_id)->first();
        // if ($nft) {
        //     $nftimg = $nft->nft_images;
        // }
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
    $this->data['nfts'] = $nfts;
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
        $trade = Trade::where('nft_id', $request->input('nft_id'))->first();
            // dd($trade);
        if ($trade) {
            $trade->status = $request->input('status');
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
