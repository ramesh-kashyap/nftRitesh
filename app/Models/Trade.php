<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;


    protected $fillable = [
        'package', 'name', 'buyer_id','seller_id','endPrice','entrytime','endtime','percentage','profitType','nft_id',
    ];

}
