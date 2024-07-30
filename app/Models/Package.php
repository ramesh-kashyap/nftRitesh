<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{

    protected $table = 'package';
    use HasFactory;

    protected $fillable = [
        'id','level','min_amount','max_amount','package_min','package_max','status','created_at','updated_at'
    ];
}
