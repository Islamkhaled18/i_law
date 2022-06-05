<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminActivityLog extends Model
{
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
}
