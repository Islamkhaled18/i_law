<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function index(){
        $contactuss = Contact::all();
        return view('admin.pages.contactus.index',compact('contactuss'));
    }

    
    public function destroy($id , Contact $contact){
        $contact->find($id)->delete();
        return Redirect::back()->withFlashMessage('تم الحذف بنجاح');
    }//end of delete messages
}
