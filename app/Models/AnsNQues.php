<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnsNQues extends Model
{
    use HasFactory;


    public function ans_n_ques()
    {
        return $this->belongsTo(Game::class);
    }
}
