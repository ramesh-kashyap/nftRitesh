<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'collection_id', 'img', 'price', 'sale','number',
    ];

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }
}
