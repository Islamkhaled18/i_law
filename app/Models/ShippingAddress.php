<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
