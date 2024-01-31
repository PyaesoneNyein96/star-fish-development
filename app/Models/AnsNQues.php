<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnsNQues extends Model
{
    use HasFactory;


    // protected $fillable = [
    //     'round','game_id','q_image','q_audio','q_conver','q_content','type','isLocal','background','round_instruction','a_extra','data','a_image','a_audio','a_conver','a_content'
    // ];


    // protected function data(): Attribute{

    //     return Attribute::make(
    //         get: fn ($value) => json_decode($value,true),
    //         set: fn ($value) => json_encode($value),
    //     );

    // }


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
