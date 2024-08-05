<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'Activitys';
    use HasFactory;
    protected $fillable = ['user_id','status', 'title'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    } 
}
