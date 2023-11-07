<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionContent extends Model
{
    use HasFactory;

    protected $hidden = ['pivot','created_at', 'updated_at'];

    protected $fillable = [
        'name',
        'round_id',
        'image',
        'video',
        'audio',
        'content',
    ];
}
