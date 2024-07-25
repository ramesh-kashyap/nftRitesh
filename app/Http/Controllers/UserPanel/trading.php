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

        // Assuming each NFT has a unique name
        $trade = Trade::create([
            'nft_id' => $nft->id,
            'name' => $nft->name,
            'status' => 'Pending',
            'currency' =>'USDT',
            'buyer_id' => Auth::id(),
        ]);

        return back()->with("Your NFT Buying Sucessfully");
    }

    public function investamount()
    {
        $user = Auth::user();    
    $iamount = Package::all();
    $nfts = Nft_Trading::all();

    $this->data['iamount'] = $iamount;
    $this->data['nfts'] = $nfts;
    $this->data['page'] = 'user.trading.nft_view';
    return $this->dashboard_layout();
    }



}
