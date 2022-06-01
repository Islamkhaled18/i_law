<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    protected $table = "writers";
    protected $guarded = [];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function books(){
        return $this->hasMany(Book::class);
    }

}
