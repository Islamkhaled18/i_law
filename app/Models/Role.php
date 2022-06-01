<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class Role extends Model
{
    
    protected $fillable = [
        'name'  
    ];
    

    public function permissions()
    {
        return $this->belongsToMany(Permission::class , 'role_permissions');
    }

    public function admins() {

        return $this->belongsToMany(Admin::class,'admin_roles');
            
     }
}
