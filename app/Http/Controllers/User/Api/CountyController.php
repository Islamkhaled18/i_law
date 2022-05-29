<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Http\Resources\CountryResource;
use Illuminate\Support\Facades\Validator;
use App\Traits\Api\CountryTrait;


class CountyController extends Controller
{
    use CountryTrait;

    public function index(Request $request){


        $lang = $request->header('lang');
        $list = [];
        $country = CountryResource::collection(Country::get());
        foreach ($country as $key => $value) {
            $list[] = [
                'id' => $value['id'],
                'name' => $value['name_'.$lang]
            ];
        }
        return $this->countryApiResponse($list,'ok',200);
    }

    public function show($id){

        $country = Country::find($id);

        if($country){
            return $this->countryApiResponse(new CountryResource($country),'ok',200);
        }
        return $this->countryApiResponse(null,'The country Not Found',404);

    }
}
