<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lesson_id'
    ];

    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }

    public function rounds(){
        return $this->belongsToMany(Round::class);
    }


    public function audios(){
        return $this->belongsToMany(Audio::class,'game_audio', 'game_id','audio_id');
    }

    public function images(){
        return $this->belongsToMany(Audio::class,'game_images', 'game_id','image_id');
    }

}
