<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuurency extends Model
{
    protected $guarded =[];
    protected $table = "currencies";

    protected $casts = [
        'is_active' => 'boolean',
   ];

   public function getActive(){
        return $this-> is_active == 0 ? 'notactive' :'active';
   }
   
   public function scopeActive($query){
        return $query->where('is_active',1);
    }


    public function countries()
    {
        return $this->belongsToMany(Country::class,'country_currencies','country_id','currency_id');
    }
   
}
