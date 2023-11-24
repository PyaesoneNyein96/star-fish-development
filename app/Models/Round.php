<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    use HasFactory;


    protected $hidden = ['pivot','created_at', 'updated_at'];




    protected $fillable = [
        'name',
        'game_id'
    ];

    public function game(){
        return $this->belongsTo(Game::class);
    }

    public function audios(){
        return $this->hasMany(Audio::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function videos(){
        return $this->hasMany(Video::class);
    }

    public function questions(){
        return $this->hasMany(QuestionContent::class);
    }

    public function answers(){
        return $this->hasMany(AnswerContent::class);
    }

    public function backgrounds(){
        return $this->hasOne(BackgroundImage::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function characters(){
        return $this->hasMany(Character::class);
    }

    public function conversations(){
        return $this->hasMany(Conversation::class);
    }



    public function toArray(){

        $data = parent::toArray();
        $filteredData = array_filter($data, function ($value) {
            return !is_null($value) && (!is_array($value) || !empty($value));
        });

        return $filteredData;
    }




}
