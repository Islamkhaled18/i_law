<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index(){

        $collection = Setting::all();
        $setting['setting'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });
        return response()->json([
            'message' => 'All Settings',
            'setting' => $collection
        ], 201);
    }

    public function update(Request $request){

        
        $info = $request->except('_token', '_method');
        foreach ($info as $key=> $value){
            Setting::where('key', $key)->update(['value' => $value]);
        }

        return response()->json([
            'message' => 'Updated',
            'setting' => $info
        ], 200);
    }


    
}
