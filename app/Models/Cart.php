<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table ="carts";
    protected $guarded =[];

    public function user(){
        return $this->belongsTo(User::class ,'user_id');
    }
    public function books(){
        return $this->hasMany(Book::class ,'book_id');
    }
}
