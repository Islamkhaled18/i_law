<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Http\Resources\CityResource;
use Illuminate\Support\Facades\Validator;
use App\Traits\Api\CityTrait;

class CityController extends Controller
{
    use CityTrait;

    public function index(Request $request){
        $lang = $request->header('lang');
        $list = [];
        $city = CityResource::collection(city::get());
        foreach ($city as $key => $value) {
            $list[] = [
                'id' => $value['id'],
                'name' => $value['name_'.$lang]
            ];
        }
        return $this->cityApiResponse($list,'ok',200);

    }
    public function citesByGovernorate(Request $request, $governorate){
        $lang = $request->header('lang');
        $list = [];
        $city = CityResource::collection(city::where('governorate_id', $governorate)->get());
        foreach ($city as $key => $value) {
            $list[] = [
                'id' => $value['id'],
                'name' => $value['name_'.$lang]
            ];
        }
        return $this->cityApiResponse($list,'ok',200);

    }

    public function show($id){

        $city = city::find($id);

        if($city){
            return $this->cityApiResponse(new CityResource($city),'ok',200);
        }
        return $this->cityApiResponse(null,'The city Not Found',404);

    }
}
