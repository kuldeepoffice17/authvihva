<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    //
    protected $fillable = [
        'user_id',  // Add this line
        'name',
        'phone',
        'age',
        'designation',
        'address',
    ];
}
