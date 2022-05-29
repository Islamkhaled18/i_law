<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GovenorateResource extends JsonResource
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
            'governorate_code'=>$this->governorate_code,
            'country_id'=>$this->country_id,
        ];
    }
}
