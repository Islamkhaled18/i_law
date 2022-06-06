<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Constraint\Count;

class ShippingAddress extends Model
{
    protected $table = "shipping_addresses";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function country(){
        return $this->belongsTo(Country::class ,'country_id');
    }

    public function governorate(){
        return $this->belongsTo(Governorate::class ,'governorate_id');
    }

    public function city(){
        return $this->belongsTo(City::class ,'city_id');
    }

    
}
