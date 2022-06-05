<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShippingAddress;

class ShippingController extends Controller
{
    public function index(){
        $shippings = ShippingAddress::all();
        return view('admin.pages.shipping.index',compact('shippings'));
    }

    public function destroy($id)
    {
        
        $shipping = ShippingAddress::find($id);

        if (!$shipping)
            return redirect()->route('admin.shipping')->with(['error'=>__('dashboard.error')]);

        $shipping->delete();

        return redirect()->route('admin.shipping')->with(['success'=>__('dashboard.deleted_successfully')]);

       
    }
}
