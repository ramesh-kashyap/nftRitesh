<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_notices extends Model
{
    use HasFactory;
    protected $table = 'admin_notices';
    protected $fillable=['title','notice'];

}
