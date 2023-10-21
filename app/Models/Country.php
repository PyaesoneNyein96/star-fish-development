<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

       protected $fillable = [
        'name',
        'timezone',
        ];


        public function cities(){
            return $this->hasMany(City::class);
        }

        public function students(){
            return $this->hasMany(Students::class);
        }


}