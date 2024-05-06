<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyBonus extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'first',
        'second',
        'daily',
        'day_count',
        'created_at',
        'updated_at',
    ];
}
