<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;


    protected $fillable = [
        'student_id',
        'grade_id',
        'total_percentage',
        "pdf_path"
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
