<?php

namespace App\Models;

use App\Models\Image;
use App\Models\GameInstruction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\InstructionGif;


class Game extends Model
{
    use HasFactory;

    protected $hidden = ['pivot', 'created_at', 'updated_at'];



    protected $fillable = [
        'name',
        'unit_id'
    ];

    // public function category(){
    //     return $this->belongsTo(Category::class);
    // }


    public function grade()
    {
        return $this->belongsTo(Grade::class, Lesson::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_games', 'game_id', 'student_id');
    }

    public function rounds()
    {
        return $this->hasMany(Round::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }






    ////////////////////

    public function audios()
    {
        return $this->hasMany(Audio::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function conversations()
    {
        return $this->hasMany(Conversation::class);
    }

    public function characters()
    {
        return $this->hasMany(Character::class);
    }

    public function background()
    {
        return $this->hasMany(BackgroundImage::class);
    }

    public function instructions()
    {
        return $this->hasMany(GameInstruction::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
    public function songs()
    {
        return $this->hasMany(Song::class);
    }




    ///////////////////////////////////////////////////////
    ///////     answer and question table create    ///////
    ///////////////////////////////////////////////////////

    public function ans_n_ques()
    {
        return $this->hasMany(AnsNQues::class);
    }





    // public function audios(){
    //     return $this->belongsToMany(Audio::class,'game_audio', 'game_id','audio_id');
    // }

    // public function images(){
    //     return $this->belongsToMany(Audio::class,'game_images', 'game_id','image_id');
    // }



    //    public function toArray(){

    //     $data = parent::toArray();

    //     $filteredData = array_filter($data, function ($value) {
    //         return  !is_array($value) || !empty($value);
    //     });

    //     return $filteredData;
    // }


}
