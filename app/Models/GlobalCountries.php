<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalCountries extends Model
{
    use HasFactory;

    protected $connection = "mysql_2";

    public function globalCities(){
        return $this->setConnection('mysql_2')->hasMany(GlobalCities::class,'global_country_id','id')
        ;
        // ->select(['id','global_country_id','name as Cities']);
    }


}
