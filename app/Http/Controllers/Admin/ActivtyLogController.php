<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ActivtyLogController extends Controller
{
    public function index(){
        $activities = AdminActivityLog::all();
        return view('admin.pages.admins.activityLog',compact('activities'));
    }

    public function destroy($id)
    {
        
        $activity = AdminActivityLog::find($id);

        if (!$activity)
            return redirect()->route('admin.activity')->with(['error'=>__('dashboard.error')]);

        $activity->delete();

        return redirect()->route('admin.activity')->with(['success'=>__('dashboard.deleted_successfully')]);

       
    }
}
