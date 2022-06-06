<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = [];
    protected $table = "countries";

    public function currencies()
    {
        return $this->hasOne(Cuurency::class);
    }

    public function currenciesApi($lang)
    {
        $list = [];
        foreach ($this->currencies as $key => $value) {
            $list[] = [
                'id' => $value['id'],
                'name' => $value['name_' . $lang],
                'code' => $value['code'],
                'is_active' => $value['is_active'],
                'excange_value' => $value['excange_value'],

            ];
        }
        return $list;
    }

    public function governorates()
    {
        return $this->hasMany(Governorate::class);
    }

    public function shippingAddress(){
        return $this->hasOne(ShippingAddress::class);
    }

    public function forApi($lang)
    {
        return [
            'name' => $this['name_'.$lang],
            'id' => $this['id']
        ];
    }
}
