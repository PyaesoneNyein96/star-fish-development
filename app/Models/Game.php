<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;

    protected $hidden = ['pivot','created_at', 'updated_at','category_id'];



    protected $fillable = [
        'name',
        'lesson_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }

    public function students(){
        return $this->belongsToMany(Student::class,'student_games','game_id','student_id');
    }

    public function rounds(){
        return $this->hasMany(Round::class);
    }

    public function items(){
        return $this->hasMany(Item::class);
    }

    public function audios(){
        return $this->hasMany(Audio::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    // public function videos(){
    //     return $this->hasMany(Video::class);
    // }

    public function conversations(){
         return $this->hasMany(Conversation::class);
        }

    public function characters(){
        return $this->hasMany(Character::class);
    }

    public function background(){
        return $this->hasMany(BackgroundImage::class);
    }


    // public function audios(){
    //     return $this->belongsToMany(Audio::class,'game_audio', 'game_id','audio_id');
    // }

    // public function images(){
    //     return $this->belongsToMany(Audio::class,'game_images', 'game_id','image_id');
    // }


    public function toArray(){

        $data = parent::toArray();

        // Filter out properties with null or empty arrays.
        $filteredData = array_filter($data, function ($value) {
            return !is_null($value) && (!is_array($value) || !empty($value));
        });

        return $filteredData;
    }

}
