<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stud_reward extends Model
{
    use HasFactory;

    protected $fillable = [
       'student_id',
       'reward_id'
    ];
}