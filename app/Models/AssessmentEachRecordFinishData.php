<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentEachRecordFinishData extends Model
{
    use HasFactory;

    protected $fillable = [
        "student_id",
        "assess_id",
        "assess_name",
        "grade_id",
        "total_point",
        "timer"
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
