<?php

namespace App\Traits\Api;

trait OrderTrait
{

    public function orderApiResponse($data= null,$message = null,$status = null){

        $array = [
            'data'=>$data,
            'message'=>$message,
            'status'=>$status,
        ];
 
        return response($array,$status);
 
    }


}