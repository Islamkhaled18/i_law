<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuurency;
use Illuminate\Support\Facades\Validator;
use App\Traits\Api\CurrencyTrait;

class CurrencyController extends Controller
{
    use CurrencyTrait;

    public function index(Request $request)
    {
        $lang = $request->header('lang');
        $list = [];
        $currency = Cuurency::get();
        foreach ($currency as $key => $value) {
            $list[] = [
                'id' => $value['id'],
                'name' => $value['name_' . $lang],
                'code' => $value['code'],
                'is_active' => $value['is_active'],
                'excange_value' => $value['excange_value'],
            ];
        }
        return $this->CurrencyApiResponse($list, 'ok', 200);
    }

    public function show($id,Request $request)
    {

        $currency = Cuurency::find($id);

        if ($currency) {
            $lang = $request->header('lang');
            $data = [
                'id' => $currency['id'],
                'name' => $currency['name_' . $lang],
                'code' => $currency['code'],
                'is_active' => $currency['is_active'],
                'excange_value' => $currency['excange_value'],
            ];

            return $this->CurrencyApiResponse($data, 'ok', 200);
        }
        return $this->CurrencyApiResponse(null, 'The currency Not Found', 404);
    }
}
