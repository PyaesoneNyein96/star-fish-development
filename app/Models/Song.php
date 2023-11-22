<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $hidden = ['pivot','created_at', 'updated_at'];

    protected $fillable = [
        'title',
        'round_id',
        'game_id',
        'path',
        'isLocal',
    ];


    // public function round(){
    //     return $this->belongsTo(Round::class);
    // }

    // public function game(){
    //     return $this->belongsTo(Game::class);
    // }


}
