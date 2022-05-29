<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded =[];
    protected $table = "books";

    protected $casts = [
        'is_active' => 'boolean',
   ];

   public function getActive(){
        return $this-> is_active == 0 ? 'notactive' :'active';
   }
   
   public function scopeActive($query){
        return $query->where('is_active',1);
    }

    public function writer(){
        return $this->belongsTo(Writer::class ,'writer_id');
    }

    public function vendor(){
        return $this->belongsTo(Vendor::class ,'vendor_id');
    }

}
