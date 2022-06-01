<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Http\Resources\CartResource;
use Illuminate\Support\Facades\Validator;
use App\Traits\Api\CartTrait;


class CartController extends Controller
{
    use CartTrait;

    public function index()
    {

        $contact = CartResource::collection(Cart::get());
        return $this->cartApiResponse($contact, 'ok', 200);
    }

    public function show($id)
    {

        $contact = Cart::find($id);

        if ($contact) {
            return $this->cartApiResponse(new CartResource($contact), 'ok', 200);
        }
        return $this->cartApiResponse(null, 'The cart Not Found', 404);
    }
}
