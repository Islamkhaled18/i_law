<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\Auth\Admin\HasPermissionsTrait;


class Admin extends Authenticatable
{
    use HasPermissionsTrait;

    protected $guarded = [];
    protected $table = "admins";

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'admin_roles');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'admin_permissions');
    }

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getActive()
    {
        return $this->is_active == 0 ? 'notactive' : 'active';
    }
    

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
    protected $appends = ['image_path'];

    public function getImagePathAttribute(){
        return asset('storage/' . $this->image);
    }

    public function profileAdmin(){
        return $this->hasOne(profileAdmin::class,'admin_id');
    }
    
}
