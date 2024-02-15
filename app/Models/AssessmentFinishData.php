<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentFinishData extends Model
{
    use HasFactory;
    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = [
        'student_id',
        'assess_name',
        "game_1",
        "game_2",
        "game_3",
        "game_4",
        "game_5",
        "game_6",
        "game_7",
        "game_8",
        "game_9",
        "game_10",
    ];


    public function toArray()
    {

        $data = parent::toArray();

        $filteredData = array_filter($data, function ($value) {
            return $value != 0 && !is_null($value) && (!is_array($value) || !empty($value));
        });

        return $filteredData;
    }
}
