<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $hidden = ['pivot','created_at', 'updated_at','category_id','type'];

    protected $fillable = [
        'name',
        'type',
    ];

}
