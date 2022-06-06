<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShippingAddress;
use App\Http\Resources\ShippingAddressResource;
use Illuminate\Support\Facades\Validator;
use App\Traits\Api\shippingAddressTrait;


class ShippingAddressController extends Controller
{
    use shippingAddressTrait;

    public function index(Request $request)
    {

        $lang = $request->header('lang');
        $list = [];
        $shippingAddresses = ShippingAddress::get();

        foreach ($shippingAddresses as $key => $value) {
            $list[] = [
                'id' => $value['id'],
                'address' => $value['address'],
                'postal_code' => $value['postal_code'],
                'phone_number' => $value['phone_number'],
                'country' => $value->country->forApi($lang),
                'governorate' => $value->governorate->forApi($lang),
                'city' => $value->city->forApi($lang),
            ];
        }
        return $this->shippingAddressApiResponse($list, 'ok', 200);
    }

    public function show($id, Request $request)
    {

        $shippingAddress = ShippingAddress::find($id);

        if ($shippingAddress) {
            $lang = $request->header('lang');
            $data = [
                'id' => $shippingAddress['id'],
                'address' => $shippingAddress['address'],
                'postal_code' => $shippingAddress['postal_code'],
                'phone_number' => $shippingAddress['phone_number'],
                'country' => $shippingAddress->country->forApi($lang),
                'governorate' => $shippingAddress->governorate->forApi($lang),
                'city' => $shippingAddress->city->forApi($lang),
            ];

            return $this->shippingAddressApiResponse($data, 'ok', 200);
        }
        return $this->shippingAddressApiResponse(null, 'The Shipping Address Not Found', 404);
    }



    public function shippingAddressByUser($user, Request $request)
    {

        $lang = $request->header('lang');
        $list = [];
        $shippingAddresses = ShippingAddress::where('user_id', $user)->get();
        foreach ($shippingAddresses as $key => $value) {
            $list[] = [
                'id' => $value['id'],
                'address' => $value['address'],
                'country_id' => $value->country['name_' . $lang],
                'governorate_id' => $value->governorate['name_' . $lang],
                'city_id' => $value->city['name_' . $lang],
                'postal_code' => $value['postal_code'],
                'phone_number' => $value['phone_number'],
            ];
        }
        return response()->json([
            'data' => $list,
            'message' => 'ok'
        ], 200);
    }



    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'address' => 'required',
            'country_id' => 'required',
            'governorate_id' => 'required',
            'city_id' => 'required',
            'postal_code' => 'required',
            'phone_number' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->shippingAddressApiResponse(null, $validator->errors(), 400);
        }
        $shippingAddress = new ShippingAddress();
        $shippingAddress->address = $request->address;
        $shippingAddress->country_id = $request->country_id;
        $shippingAddress->governorate_id = $request->governorate_id;
        $shippingAddress->city_id = $request->city_id;
        $shippingAddress->postal_code = $request->postal_code;
        $shippingAddress->phone_number = $request->phone_number;
        $shippingAddress->user_id = $request->user_id;
        $shippingAddress->save();

        if ($shippingAddress) {
            $lang = $request->header('lang');
            $shippingAddress = [
                'id' => $shippingAddress['id'],
                'address' => $shippingAddress['address'],
                'postal_code' => $shippingAddress['postal_code'],
                'phone_number' => $shippingAddress['phone_number'],
                'country_id' => $shippingAddress->country['name_' . $lang],
                'governorate_id' => $shippingAddress->governorate['name_' . $lang],
                'city_id' => $shippingAddress->city['name_' . $lang],
            ];

            return $this->shippingAddressApiResponse($shippingAddress, 'The shipping Address Saved', 201);
        }


        return $this->shippingAddressApiResponse(null, 'The shipping Address Not Save', 400);
    }


    public function update(Request $request, $id)
    {

        $shippingAddress = ShippingAddress::find($id);


        if (!$shippingAddress) {
            return $this->shippingAddressApiResponse(null, 'The Address Not Found', 404);
        }


        $shippingAddress->update([
            'address' => $request->address,
            'country_id' => $request->country_id,
            'governorate_id' => $request->governorate_id,
            'city_id' => $request->city_id,
            'postal_code' => $request->postal_code,
            'phone_number' => $request->phone_number,
            'user_id' => $request->user_id,
        ]);

        if ($shippingAddress) {
            $lang = $request->header('lang');
            $shippingAddress = [
                'id' => $shippingAddress['id'],
                'address' => $shippingAddress['address'],
                'postal_code' => $shippingAddress['postal_code'],
                'phone_number' => $shippingAddress['phone_number'],
                'country_id' => $shippingAddress->country['name_' . $lang],
                'governorate_id' => $shippingAddress->governorate['name_' . $lang],
                'city_id' => $shippingAddress->city['name_' . $lang],
            ];

            return $this->shippingAddressApiResponse($shippingAddress, 'The address update', 201);
        }
    }


    public function destroy($id)
    {

        $shippingAddress = ShippingAddress::find($id);

        if (!$shippingAddress) {
            return $this->shippingAddressApiResponse(null, 'The address Not Found', 404);
        }

        $shippingAddress->delete($id);

        if ($shippingAddress) {
            return $this->shippingAddressApiResponse(null, 'The address deleted', 200);
        }
    }
}
