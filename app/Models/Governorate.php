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
        return $this->hasMany(City::class,'city_id');
    }


    protected $appends  = ['city'];

     //attributes----------------------------------
    public function getCityAttribute()
    {
        return $this->cities();

    }//end of get image path

    public function shippingAddress(){
        return $this->hasOne(ShippingAddress::class);
    }
    public function forApi($lang)
    {
        return [
            'name' => $this['name_'.$lang],
            'id' => $this['id']
        ];
    }

}
