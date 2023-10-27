<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'path',
    ];

    public function games(){
        return $this->belongsToMany(Game::class,'game_audio','audio_id','game_id');
    }


}
