<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

     protected $fillable = [
        'name',
        'description',
    ];

    public function students(){
        return $this->hasMany(LocalStudent::class,GlobalStudent::class);
        // localStudent (DB_1)
        // globalStudent (DB_2)
    }



}
