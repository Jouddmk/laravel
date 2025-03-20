<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'mobile_number',
        'gender'=> 'not specified',
        'photo',
    ];
}
