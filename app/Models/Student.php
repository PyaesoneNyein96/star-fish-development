<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasApiTokens,HasFactory;

        protected $fillable = [
        'id',
        'name',
        'nickName',
        'phone',
        'email',
        'age',
        'password',
        'profile_picture',
        'role',
        'grade',
        'otp',
        'token',
        'agreeToPolicy',
        'deviceId',
        'country',
        'isLocal',
        'city',
        'isAuth',
        'isSubscriber',
        'subscription_plans_id',
        'game',
        'point',
        'status',
    ];


    public function city(){
        return $this->belongsTo(City::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }
}