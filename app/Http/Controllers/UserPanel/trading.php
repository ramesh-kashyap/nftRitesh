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

    // public function show($id)
    // {
    //     // Fetch the specific NFT trading record by id
    //     $nft = Nft_Trading::findOrFail($id);

    //     // Pass the data to the Blade view
    //     return view('nft.show', compact('nft'));
    // }
}
