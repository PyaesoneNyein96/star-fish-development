<?php

namespace App\Models;

use App\Models\Game;
use App\Models\Lesson;
use App\Models\SubscriptionPlan;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasApiTokens, HasFactory;

    // protected $hidden = ['pivot'];
     protected $hidden = ['pivot','created_at','updated_at'];

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
        'fixed_point',
        'level',
        'board',
        'status',
    ];


    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

    // Game Relationships

    public function grades()
    {
        return $this->belongsToMany(Grade::class, 'student_grades', 'student_id', 'grade_id');
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class, 'student_lessons', 'student_id', 'lesson_id');
    }

    public function games(){
        return $this->belongsToMany(Game::class,'student_games','student_id','game_id');
    }









//============================
    public function toArray(){

        $data = parent::toArray();

        $filteredData = array_filter($data, function ($value) {
            return !is_null($value) && (!is_array($value) || !empty($value));
        });

        return $filteredData;
    }



}
