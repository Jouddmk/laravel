<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'mobile_number',
        'gender'=> 'not specified',
        'photo',
        // 'name' => 'jojo',
        // 'email' => 'jojo@example.com',
        // 'password' => 123,
        // 'address' => 'jordan',
        // 'mobile_number' => '0501234567',
        // 'gender' => 'female',
        // 'photo' => 'https://cdn.pixabay.com/photo/2020/04/15/09/32/crane-5045920_1280.jpg',
    ];
}

