<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'country_id', 'timezone'];

    protected $hidden = ['pivot','created_at', 'updated_at'];


    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function user(){
            return $this->hasMany(User::class);
    }



    public function toArray(){

            $data = parent::toArray();

            $filteredData = array_filter($data, function ($value) {
                return !is_null($value) && (!is_array($value) || !empty($value));
            });

        return $filteredData;
    }


}


// ===========


// export const rearrange = {
//   rounds: [
//     {
//       id: 1,
//       data: [
//         {
//           id: 1,
//           content: "A",
//           question: 1,
//           correct_place: 1,
//         },
//         {
//           id: 2,
//           content: "B",
//           question: 0,
//           correct_place: 0,
//         },
//         {
//           id: 3,
//           content: "C",
//           question: 1,
//           correct_place: 1,
//         },
//         {
//           id: 4,
//           content: "D",
//           question: 1,
//           correct_place: 1,
//         },
//         {
//           id: 5,
//           content: "E",
//           question: 0,
//           correct_place: 0,
//         },
//         {
//           id: 6,
//           content: "F",
//           question: 1,
//           correct_place: 1,
//         },
//         {
//           id: 7,
//           content: "G",
//           question: 1,
//           correct_place: 1,
//         },
//         {
//           id: 8,
//           content: "H",
//           question: 1,
//           correct_place: 1,
//         },
//         {
//           id: 9,
//           content: "I",
//           question: 1,
//           correct_place: 1,
//         },
//       ],
//     },
//   ],
// };
