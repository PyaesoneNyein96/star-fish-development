<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGrade extends Model
{
    use HasFactory;

    // protected $hidden = ['pivot'];

    protected $hidden = ['pivot','updated_at'];

    protected $fillable = [
        'student_id',
        'grade_id',
        'subscription_id',
        'expire_date',
        'status'
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
