<?php

namespace App\Traits\Api;

trait vendorTrait
{

    public function vendorApiResponse($data= null,$message = null,$status = null){

        $array = [
            'data'=>$data,
            'message'=>$message,
            'status'=>$status,
        ];
 
        return response($array,$status);
 
    }


}