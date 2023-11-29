<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subunit extends Model
{
    use HasFactory;

    protected $hidden = ['pivot','created_at','updated_at'];

    protected $fillable = [
            'subUnitsName',
            'game_id',

    ];

        public function instructions(){
            return $this->hasMany(GameInstruction::class);
        }
}
