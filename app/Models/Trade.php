<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    protected $table = 'trades';
    use HasFactory;


    protected $fillable = [
        'package', 'name', 'buyer_id','symbol','status','currency','entrytime','nft_image','endtime','price','profitType','nft_id',
    ];

}
