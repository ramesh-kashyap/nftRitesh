<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nft_Trading;

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

    public function buynft(Request $request)
    {
        // Validate the request
        $request->validate([
            'id' => 'required|integer', // Validate ID
        ]);

        // Find the record by ID
        $nftTrading = Nft_Trading::find($request->id);

        // Update the status if it is null
        if ($nftTrading && is_null($nftTrading->status)) {
            $nftTrading->status = 'Pending';
            $nftTrading->save();
            return response()->json(['success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Invalid request'], 400);
    }
}
