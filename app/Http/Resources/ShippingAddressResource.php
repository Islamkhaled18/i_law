<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShippingAddressResource extends JsonResource
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
            'address'=>$this->address,
            'country'=>$this->country,
            'governorate'=>$this->governorate,
            'city'=>$this->city,
            'postal_code'=>$this->postal_code,
            'phone_number'=>$this->phone_number,
            'user_id'=>$this->user_id,
        ];
    }
}
