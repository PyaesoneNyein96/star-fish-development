<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LocalStudent extends Model
{

     use HasApiTokens, HasFactory;
    // use HasFactory;

     protected $fillable = [
        'name',
        'nick_name',
        'phone',
        'otp',
        'profile_picture',
        'point',
        'status',
        'grade',
        'age',
        'isSubscribe',
        'isAuth',
        'password',
        'token',
    ];

}
