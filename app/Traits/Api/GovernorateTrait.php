<?php

namespace App\Traits\Api;

trait GovernorateTrait
{

    public function governorateApiResponse($data= null,$message = null,$status = null){

        $array = [
            'data'=>$data,
            'message'=>$message,
            'status'=>$status,
        ];
 
        return response($array,$status);
 
    }


}