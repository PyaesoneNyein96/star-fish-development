<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalCities extends Model
{
    use HasFactory;

    protected $connection = "mysql_2";

    public function globalCountry(){
        return $this->setConnection('mysql_2')->belongsTo(GlobalCountries::class);
    }
}
