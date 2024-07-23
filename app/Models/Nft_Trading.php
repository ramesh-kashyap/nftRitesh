<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nft_Trading extends Model
{
    use HasFactory;

    protected $table = 'nft_tradings';


    protected $fillable = [
        'id','nft_id','name','description','creator_id','owner_id','nft_images','created_at','updated_at'
    ];
}
