<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $hidden = ['pivot','created_at','updated_at'];

    protected $fillable = [
        'name',
        'grade_id'
    ];

    public function grade(){
        return $this->belongsTo(Grade::class);
    }

    public function units(){
        return $this->hasMany(Unit::class);
    }

    public function students(){
        return $this->belongsToMany(Student::class,'student_lessons','lesson_id','student_id');
    }

    public function games(){
        return $this->hasManyThrough(Game::class,Unit::class);
    }


}
