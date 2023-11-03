<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $hidden = ['pivot'];

    protected $fillable = [
        'name',
        'lesson_id'
    ];

    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }

    public function students(){
        return $this->belongsToMany(Student::class,'student_games','game_id','student_id');
    }

    public function rounds(){
        return $this->hasMany(Round::class);
    }

    public function audios(){
        return $this->hasMany(Audio::class);
    }


    // public function audios(){
    //     return $this->belongsToMany(Audio::class,'game_audio', 'game_id','audio_id');
    // }

    public function images(){
        return $this->belongsToMany(Audio::class,'game_images', 'game_id','image_id');
    }

}
