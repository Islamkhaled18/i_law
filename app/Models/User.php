<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;
    

    protected $guarded =[];
    protected $table="users";

    protected $casts = [
        'email_verified_at' => 'datetime',
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

    public function shippingAddresses(){
        return $this->hasMany(ShippingAddress::class);
    }

    public function cart(){
        return $this->belongsTo(Cart::class);
    }


}
