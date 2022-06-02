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

    protected $appends = ['image_path'];

    public function getImagePathAttribute(){
        return asset('storage/' . $this->image);
    }

    
    public function writer(){
        return $this->belongsTo(Writer::class ,'writer_id');
    }

    public function vendor(){
        return $this->belongsTo(Vendor::class ,'vendor_id');
    }

    public function section(){
        return $this->belongsTo(Section::class ,'section_id');
    }
    public function cart(){
        return $this->belongsTo(Cart::class);
    }



}
