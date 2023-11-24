<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $hidden = ['pivot','created_at','updated_at'];

    protected $fillable = [
        'name',
        'description',
        'isDone'
    ];

    public function lessons(){
        return $this->hasMany(Lesson::class);
    }

    public function students(){
        return $this->belongsToMany(Student::class,'student_grades','grade_id','student_id');
    }

    public function games(){
        return $this->hasManyThrough(Game::class,Lesson::class);
    }


}
