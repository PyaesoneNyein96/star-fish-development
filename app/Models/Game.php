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

}
