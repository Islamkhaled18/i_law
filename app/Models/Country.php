<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded =[];
    protected $table = "countries";

    public function currencies()
    {
        return $this->belongsToMany(Cuurency::class,'country_currencies','country_id','currency_id');
    }

    public function governorates(){
        return $this->hasMany(Governorate::class);
    }
}
