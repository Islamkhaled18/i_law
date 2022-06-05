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

    public function booksApi($lang)
    {
        $list = [];
        foreach ($this->books as $key => $value) {
            $list[] = [
                'id' => $value['id'],
                'name' => $value['name_' . $lang],
                'desc' => $value['desc_' . $lang],
                'index' => $value['index_' . $lang],
                'writer_id' => $value['writer_id'],
                'vendor_id' => $value['vendor_id'],
                'stock' => $value['stock'],
                'price' => $value['price'],
                'offer' => $value['offer'],
                'type' => $value['type'],
                'is_active' => $value['is_active'],
            ];
        }
        return $list;
    }

}
