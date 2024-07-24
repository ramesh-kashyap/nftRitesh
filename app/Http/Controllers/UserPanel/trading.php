<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nft_Trading;
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

   public function trade(Request $request)
    {
        $request->validate([
            'nft_id' => 'required|exists:nfts,id',
        ]);

        $nft = Nft_trading::find($request->nft_id);
        dd($nft);

        // Assuming each NFT has a unique name
        $trade = Trade::create([
            'nft_id' => $nft->id,
            'name' => $nft->name,
            'status' => 'Pending',
            'buyer_id' => Auth::id(),
        ]);

        return response()->json(['message' => 'Trade created successfully'], 200);
    }
}
