<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GlobalStudent extends Model
{
    use HasApiTokens, HasFactory;

    protected $connection = "mysql_2";

    protected $fillable = [
        'name',
        'nick_name',
        'email',
        'otp',
        'profile_picture',
        'point',
        'status',
        'grade',
        'age',
        'isAuth',
        'isSubscribe',
        'password',
        'country',
        'token',
    ];

}
