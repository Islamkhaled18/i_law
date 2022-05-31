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

    public function books(){
        return $this->hasMany(Book::class);
    }

    

}
