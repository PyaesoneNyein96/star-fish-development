<?php

namespace App\Models;

use App\Models\Game;
use App\Models\Lesson;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasApiTokens,HasFactory;

        protected $hidden = ['pivot'];

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
        'country_id',
        'isLocal',
        'city_id',
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

    // Game Relationships

    public function grades(){
        return $this->belongsToMany(Grade::class,'student_grades','student_id','grade_id');
    }

    public function lessons(){
        return $this->belongsToMany(Lesson::class,'student_lessons','student_id','lesson_id');
    }

    public function games(){
        return $this->belongsToMany(Game::class,'student_games','student_id','game_id');
    }



}
