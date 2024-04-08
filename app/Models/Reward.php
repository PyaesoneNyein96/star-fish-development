<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reward extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'type',
        'name',
        'item',
        'point'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
