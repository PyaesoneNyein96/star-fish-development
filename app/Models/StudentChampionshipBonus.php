<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentChampionshipBonus extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'point',
        'champion',
        'fix_level',
        'claim'
    ];
}
