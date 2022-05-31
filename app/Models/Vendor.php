<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;


class Vendor extends Authenticatable implements JWTSubject
{
    protected $guarded =[];
    protected $table = "vendors";
    protected $casts = [
        'is_active' => 'boolean',
   ];

   public function getActive(){
        return $this-> is_active == 0 ? 'notactive' :'active';
   }
   
   public function scopeActive($query){
        return $query->where('is_active',1);
    }

    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }
    public function governorate(){
        return $this->belongsTo(Governorate::class,'governorate_id');
    }
    public function city(){
        return $this->belongsTo(City::class,'city_id');
    }

   /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    protected $appends = ['image_path'];

    public function getImagePathAttribute(){
        return asset('storage/' . $this->image);
    }

        
    public function books(){
        return $this->hasMany(Book::class);
    }

}
