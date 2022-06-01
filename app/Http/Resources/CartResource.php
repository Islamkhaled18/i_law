<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
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
            'user_id'=>$this->user_id,
            'book_id'=>$this->book_id,
            'type'=>$this->type,
            'quantity'=>$this->quantity,
            'shipping_address'=>$this->shipping_address,
            'coupon'=>$this->coupon,
        ];
    }
}
