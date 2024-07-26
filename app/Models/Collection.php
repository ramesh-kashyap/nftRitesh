<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'img', 'bg_img', 'description', 'price', 'volume'
    ];

    public function collectionDetails()
    {
        return $this->hasMany(CollectionDetail::class);
    }
}
