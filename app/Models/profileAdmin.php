<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profileAdmin extends Model
{
    protected $table ="profile_admins";
    protected $guarded=[];

    public function admin(){
        return $this->belongsTo(Admin::class,'admin_id');
    }

}
