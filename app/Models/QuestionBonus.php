<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionBonus extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'point',
        'question_count',
        'claim'
    ];
}
