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
        // dd($request->all());

        $request->validate([
            'nft_id' => 'required',
        ]);

        $nft = Nft_Trading::find($request->nft_id);
        // dd($nft);
        if ($nft) {

            $nft->status = 'Pending';
            $nft->save();
            }

        // Assuming each NFT has a unique name
        $trade = Trade::create([
            'nft_id' => $nft->id,
            'name' => $nft->name,
            'status' => 'Pending',
            'currency' =>'USDT',
            'buyer_id' => Auth::user()->username,

            
        ]);

        

        return back()->with("Your NFT Buying Sucessfully");
    }

    public function investamount()
    {
        $user = Auth::user();    
    $iamount = Package::all();
    $nfts = Nft_Trading::all();
    $pamount = Investment::where('user_id', $user->id)->where('status', 'active')->sum('amount');


    $this->data['iamount'] = $iamount;
    $this->data['pamount'] = $pamount;
    $this->data['nfts'] = $nfts;
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
        $trade = Trade::where('nft_id', $request->input('nft_id'))
            ->where('buyer_id', Auth::user()->username)
            ->first();
            dd($trade);
        if ($trade) {
            $trade->status = $request->input('status');
            $trade->save();
            return back()->with("Your NFT Buying Sucessfully");
        }
    
        return back()->with('error', 'Failed to update NFT status.');
    }
    




}
