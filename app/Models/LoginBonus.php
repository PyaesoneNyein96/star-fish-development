<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginBonus extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'day_count',
        'claim',
        'created_at',
        'updated_at'
    ];

}
