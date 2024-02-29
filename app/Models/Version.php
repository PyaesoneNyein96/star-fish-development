<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tag',
        'version_code',
        'update_type',
        'changelog',
        'OS',
        'url'
    ];


}
