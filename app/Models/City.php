<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table="cities";
    protected $guarded =[];

    public function governorate(){
        return $this->belongsTo(Governorate::class,'governorate_id');
    }

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
