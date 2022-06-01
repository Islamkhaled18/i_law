<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    protected $guarded = [];
    protected $table = "orders";

    public function ShippingAddress(){
        return $this->belongsTo(ShippingAddress::class,'shippingAddress_id');
    }
}
