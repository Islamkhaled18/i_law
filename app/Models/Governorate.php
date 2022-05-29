<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Constraint\Count;

class Governorate extends Model
{
    protected $table="governorates";
    protected $guarded =[];

    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }

    public function cities(){
        return $this->hasMany(City::class);
    }

}
