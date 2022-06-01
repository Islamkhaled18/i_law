<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {

        $collection = Setting::all();
        $setting['setting'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });
        return view('admin.pages.setting.index', $setting);
    }

    public function update(Request $request)
    {

        try {
            $info = $request->except('_token', '_method');
            foreach ($info as $key => $value) {
                Setting::where('key', $key)->update(['value' => $value]);
            }
            return back();
        } catch (\Exception $e) {

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
