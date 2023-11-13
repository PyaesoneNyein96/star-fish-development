<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameInstruction extends Model
{
    use HasFactory;


        public function toArray(){

        $data = parent::toArray();

        // Filter out properties with null or empty arrays.
        $filteredData = array_filter($data, function ($value) {
            return !is_null($value) && (!is_array($value) || !empty($value));
        });

        return $filteredData;
    }



}
