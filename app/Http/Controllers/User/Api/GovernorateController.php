<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Governorate;
use App\Http\Resources\GovenorateResource;
use Illuminate\Support\Facades\Validator;
use App\Traits\Api\GovernorateTrait;


class GovernorateController extends Controller
{
    use GovernorateTrait;

    public function index(Request $request){
        $lang = $request->header('lang');
        $list = [];
        $governorate = GovenorateResource::collection(Governorate::get());
        foreach ($governorate as $key => $value) {
            $list[] = [
                'id' => $value['id'],
                'name' => $value['name_'.$lang]
            ];
        }
        return $this->governorateApiResponse($list,'ok',200);

     

    }

    public function governoratesByCountry(Request $request, $country){
        $lang = $request->header('lang');
        $list = [];
        $governorates = GovenorateResource::collection(Governorate::where('country_id', $country)->get());
        foreach ( $governorates as $key => $value) {
            $list[] = [
                'id' => $value['id'],
                'name' => $value['name_'.$lang]
            ];
        }
        return response()->json([
            'data' => $list,
            'message'=>'ok'
        ], 200);
    }

    public function show($id){

        $governorate = Governorate::find($id);

        if($governorate){
            return $this->governorateApiResponse(new GovenorateResource($governorate),'ok',200);
        }
        return $this->governorateApiResponse(null,'The Governorate Not Found',404);

    }
}
