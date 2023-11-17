<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $hidden = ['pivot','created_at','updated_at'];

    protected $fillable = [
        'name',
        'price',
        'expiry'
    ];

    public function students(){
        return $this->hasMany(Student::class);
    }


}
