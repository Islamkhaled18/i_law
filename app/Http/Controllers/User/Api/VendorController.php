<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Http\Resources\VendorResource;
use Illuminate\Support\Facades\Validator;
use App\Traits\Api\vendorTrait;


class VendorController extends Controller
{
    use vendorTrait;

    public function index(){

        $vendor = VendorResource::collection(Vendor::get());
        return $this->vendorApiResponse($vendor,'ok',200);

    }

    public function show($id){

        $vendor = Vendor::find($id);

        if($vendor){
            return $this->vendorApiResponse(new VendorResource($vendor),'ok',200);
        }
        return $this->vendorApiResponse(null,'The vendor Not Found',404);

    }


    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'user_name' => 'required',
            'password' => 'required',
            'role_id' => 'required',
            'is_active' => 'required',
            'default_language' => 'required',
            'country_id' => 'required',
            'governorate_id' => 'required',
            'city_id' => 'required',
            'address' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->vendorApiResponse(null,$validator->errors(),400);
        }
        $vendor = new Vendor();
        $vendor->name = $request->name;
        $vendor->email = $request->email;
        $vendor->user_name = $request->user_name;
        $vendor->password = $request->password;
        $vendor->role_id = $request->role_id;
        $vendor->is_active = $request->is_active;
        $vendor->default_language = $request->default_language;
        $vendor->country_id = $request->country_id;
        $vendor->governorate_id = $request->governorate_id;
        $vendor->city_id = $request->city_id;
        $vendor->address = $request->address;
        $vendor->land_line = $request->land_line;
        $vendor->phone = $request->phone;
        $vendor->fax = $request->fax;
        $vendor->whatsApp = $request->whatsApp;
        $vendor->company_name = $request->company_name;
        $vendor->save();

        if($vendor){
            return $this->vendorApiResponse(new VendorResource($vendor),'The vendor Saved',201);
        }

        return $this->vendorApiResponse(null,'The vendor Not Save',400);
    }



    public function update(Request $request ,$id){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'user_name' => 'required',
            'password' => 'required',
            'role_id' => 'required',
            'is_active' => 'required',
            'default_language' => 'required',
            'country_id' => 'required',
            'governorate_id' => 'required',
            'city_id' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->vendorApiResponse(null,$validator->errors(),400);
        }

        $vendor = Vendor::find($id);
        if(!$vendor){
            return $this->vendorApiResponse(null,'The vendor Not Found',404);
        }

       
        $vendor->update([
            'name' => $request->name,
            'email' => $request->email,
            'user_name' => $request->user_name,
            'password' => $request->password,
            'role_id' => $request->role_id,
            'is_active' => $request->is_active,
            'default_language' => $request->default_language,
            'country_id' => $request->country_id,
            'governorate_id' => $request->governorate_id,
            'city_id' => $request->city_id,
            'address' => $request->address,
            'land_line' => $request->land_line,
            'phone' => $request->phone,
            'fax' => $request->fax,
            'whatsApp' => $request->whatsApp,
            'company_name' => $request->company_name,
        ]);

        if($vendor){
            return $this->vendorApiResponse(new VendorResource($vendor),'The vendor update',201);
        }

    }

    public function destroy($id){

        $vendor = Vendor::find($id);

        if(!$vendor){
            return $this->vendorApiResponse(null,'The vendor Not Found',404);
        }

        $vendor->delete($id);

        if($vendor){
            return $this->vendorApiResponse(null,'The vendor deleted',200);
        }
    }
}
