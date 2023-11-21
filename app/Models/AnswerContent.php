<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerContent extends Model
{
    use HasFactory;
        protected $hidden = ['pivot','created_at', 'updated_at','round_id'];

        public function toArray(){

        $data = parent::toArray();

        $filteredData = array_filter($data, function ($value) {
            return !is_null($value) && (!is_array($value) || !empty($value));
        });

        return $filteredData;
        }


}
