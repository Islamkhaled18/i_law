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
        $country = Country::get();
        foreach ($country as $key => $value) {
            $list[] = [
                'id' => $value['id'],
                'name' => $value['name_'.$lang],
                'country_code' => $value['country_code'],
                'country_phone_code' => $value['country_phone_code'],
            ];
        }
        return $this->countryApiResponse($list,'ok',200);
    }

    public function show($id,Request $request){

        $country = Country::find($id);

        if($country){
            $lang = $request->header('lang');
            $data = [
                'id' => $country['id'],
                'name' => $country['name_' . $lang],
                'code' => $country['country_code'],
                'is_active' => $country['country_phone_code'],
            ];

            return $this->countryApiResponse($data, 'ok', 200);

        }
        return $this->countryApiResponse(null,'The country Not Found',404);

    }
}
