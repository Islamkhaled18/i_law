<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'order_no'=>$this->order_no,
            'order_date'=>$this->order_date,
            'total'=>$this->total,
            'payment_method'=>$this->payment_method,
            'shippingAddress_id'=>$this->shippingAddress_id,
            'shipping_method'=>$this->shipping_method,
        ];
    }
}
