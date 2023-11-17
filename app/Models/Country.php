<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'timezone'];

    protected $hidden = ['pivot','created_at', 'updated_at'];


    // public function toArray(){

    //     $data = parent::toArray();

    //     // Filter out properties with null or empty arrays.
    //     $filteredData = array_filter($data, function ($value) {
    //         return !is_null($value) && (!is_array($value) || !empty($value));
    //     });

    //     return $filteredData;
    // }


        public function cities(){
            return $this->hasMany(City::class);
        }

        public function students(){
            return $this->hasMany(Students::class);
        }






        public function toArray(){

            $data = parent::toArray();

            $filteredData = array_filter($data, function ($value) {
                return !is_null($value) && (!is_array($value) || !empty($value));
            });

        return $filteredData;
    }

}
