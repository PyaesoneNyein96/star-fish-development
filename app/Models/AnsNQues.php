<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnsNQues extends Model
{
    use HasFactory;


    public function ans_n_ques()
    {
        return $this->belongsTo(Game::class);
    }


     public function toArray(){

        $data = parent::toArray();


        $filteredData = array_filter($data, function ($value) {
            return !is_null($value) && (!is_array($value) || !empty($value));
        });

        return $filteredData;
    }


}
