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

    public function index()
    {

        $shippingAddress = ShippingAddressResource::collection(ShippingAddress::get());
        return $this->shippingAddressApiResponse($shippingAddress, 'ok', 200);
    }

    public function show($id)
    {

        $shippingAddress = ShippingAddress::find($id);

        if ($shippingAddress) {
            return $this->shippingAddressApiResponse(new ShippingAddressResource($shippingAddress), 'ok', 200);
        }
        return $this->shippingAddressApiResponse(null, 'The Shipping Address Not Found', 404);
    }


    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'address' => 'required',
            'country' => 'required',
            'governorate' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'phone_number' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->faqApiResponse(null, $validator->errors(), 400);
        }
        $shippingAddress = new ShippingAddress();
        $shippingAddress->address = $request->address;
        $shippingAddress->country = $request->country;
        $shippingAddress->governorate = $request->governorate;
        $shippingAddress->city = $request->city;
        $shippingAddress->postal_code = $request->postal_code;
        $shippingAddress->phone_number = $request->phone_number;
        $shippingAddress->user_id = $request->user_id;
        $shippingAddress->save();

        if ($shippingAddress) {
            return $this->shippingAddressApiResponse(new ShippingAddressResource($shippingAddress), 'The shipping Address Saved', 201);
        }

        return $this->shippingAddressApiResponse(null, 'The shipping Address Not Save', 400);
    }
}
