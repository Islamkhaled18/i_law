<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Resources\OrderResource;
use Illuminate\Support\Facades\Validator;
use App\Traits\Api\OrderTrait;


class OrderController extends Controller
{
    use OrderTrait;

    public function index()
    {

        $order = OrderResource::collection(Order::get());
        return $this->orderApiResponse($order, 'ok', 200);
    }

    public function show($id)
    {

        $order = Order::find($id);

        if ($order) {
            return $this->orderApiResponse(new OrderResource($order), 'ok', 200);
        }
        return $this->orderApiResponse(null, 'The Order Not Found', 404);
    }
}
