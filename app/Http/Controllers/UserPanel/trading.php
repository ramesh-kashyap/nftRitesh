<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class trading extends Controller
{
    //
    public function nftview(){
        return view('user.trading.nft_view');

    }
}
