<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table ="order_items";
    protected $guarded =[];

    public function order(){
        return $this->belongsTo(Order::class ,'order_id');
    }
    public function user(){
        return $this->belongsTo(User::class ,'user_id');
    }
    public function book(){
        return $this->belongsTo(Book::class ,'book');
    }
  
}
