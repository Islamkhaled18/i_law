<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            
            'id'=>$this->id,
            'name_ar'=>$this->name_ar,
            'name_en'=>$this->name_en,
            'name_fr'=>$this->name_fr,
            'city_code'=>$this->city_code,
            'governorate_id'=>$this->governorate_id,
        ];
    }
}
