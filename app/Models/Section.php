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
