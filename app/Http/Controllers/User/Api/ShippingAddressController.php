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
}

