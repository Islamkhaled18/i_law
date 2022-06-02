<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profileAdmin extends Model
{
    protected $table ="profile_admins";
    protected $guarded=[];

    protected $appends = ['image_path'];

    public function getImagePathAttribute(){
        return asset('storage/' . $this->image);
    }
    
    public function admin(){
        return $this->belongsTo(Admin::class);
    }

}
