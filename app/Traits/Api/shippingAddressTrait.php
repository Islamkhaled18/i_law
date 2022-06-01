<?php

namespace App\Traits\Api;

trait shippingAddressTrait
{

    public function shippingAddressApiResponse($data= null,$message = null,$status = null){

        $array = [
            'data'=>$data,
            'message'=>$message,
            'status'=>$status,
        ];
 
        return response($array,$status);
 
    }


}