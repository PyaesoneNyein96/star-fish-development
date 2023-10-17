<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LocalStudent extends Model
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'id',
        'name',
        'nickName',
        'phone',
        'age',
        'password',
        'profile_picture',
        'role',
        'grade',
        'otp',
        'token',
        'device_id',
        'isAuth',
        'isSubscriber',
        'subscription_plans_id',
        'game',
        'point',
        'status',
    ];
}


