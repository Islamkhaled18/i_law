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

        // $governorate = GovenorateResource::collection(Governorate::get());
        // return $this->governorateApiResponse($governorate,'ok',200);

    }

    public function show($id){

        $governorate = Governorate::find($id);

        if($governorate){
            return $this->governorateApiResponse(new GovenorateResource($governorate),'ok',200);
        }
        return $this->governorateApiResponse(null,'The Governorate Not Found',404);

    }
}
