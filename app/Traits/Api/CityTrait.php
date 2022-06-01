<?php

namespace App\Traits\Api;

trait CityTrait
{

    public function cityApiResponse($data= null,$message = null,$status = null){

        $array = [
            'data'=>$data,
            'message'=>$message,
            'status'=>$status,
        ];
 
        return response($array,$status);
 
    }


}