<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGame extends Model
{
    use HasFactory;

    protected $hidden = ['created_at','updated_at','status'];

    protected $fillable = [
        'student_id',
        'game_id',
        'unit_id',
        'count',
        'claimed_3',
        'claimed_5',
    ];


}
