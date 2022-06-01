<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VendorResource extends JsonResource
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
            'name'=>$this->name,
            'email'=>$this->email,
            'user_name'=>$this->user_name,
            'role_id'=>$this->role_id,
            'is_active'=>$this->is_active,
            'default_language'=>$this->default_language,
            'country_id'=>$this->country_id,
            'governorate_id'=>$this->governorate_id,
            'city_id'=>$this->city_id,
            'address'=>$this->address,
            'land_line'=>$this->land_line,
            'phone'=>$this->phone,
            'fax'=>$this->fax,
            'whatsApp'=>$this->whatsApp,
            'company_name'=>$this->company_name,
            'bio'=>$this->bio,
            'image'=> asset('storage/photos/vendors/' . $this->image),
          
        ];
    }
}
