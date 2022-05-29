<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public $table = 'sections';
    public $guarded = [];


    public function subsection()
    {
        return $this->hasMany(\App\Models\Section::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(\App\Models\Section::class, 'parent_id');
    }

    // public function scopeChild($query)
    // {
    //     return $query->where('parent_id' ,'!=', null);

    // }
    // public function scopeParent($query)
    // {
    //     return $query->where('parent_id' , null);

    // }
    // public function _parent(){

    //     return $this->belongsto(Self::class , 'parent_id');
    // }

    // public function children(){
    //     return $this->hasMany(Self::class , 'parent_id');
    // }

    

}
