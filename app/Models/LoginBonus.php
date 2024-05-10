<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginBonus extends Model
{
    use HasFactory;
    // protected $hidden = ['pivot'];

    protected $fillable = [
        'days',
        'point',
        'created_at',
        'updated_at'
    ];

}
