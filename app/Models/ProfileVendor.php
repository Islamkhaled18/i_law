<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileVendor extends Model
{
    protected $table ="profile_vendors";
    protected $guarded=[];

    protected $appends = ['image_path'];

    public function getImagePathAttribute(){
        return asset('storage/' . $this->image);
    }
    
    public function vendor(){
        return $this->belongsTo(Vendor::class);
    }
}
