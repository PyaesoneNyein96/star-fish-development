<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentLoginBonus extends Model
{
    use HasFactory;

    // protected $hidden = ['pivot'];

    protected $fillable = [
        'student_id',
        'attend',
        'date',
        'day_count',
        'claim'
    ];







}