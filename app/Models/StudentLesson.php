<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentLesson extends Model
{
    use HasFactory;

    protected $hidden = ['pivot','created_at','updated_at'];

    protected $fillable  = [
        'student_id',
        'grade_id',
        'lesson_id',
        'count',
        'claimed_3',
        'claimed_5',
    ];

    //========================
    public function toArray(){

        $data = parent::toArray();
        $filteredData = array_filter($data, function ($value) {
            return !is_null($value) && (!is_array($value) || !empty($value));
        });

        return $filteredData;
    }
}
