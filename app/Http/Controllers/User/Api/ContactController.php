<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Resources\ContactResource;
use Illuminate\Support\Facades\Validator;
use App\Traits\Api\ContactTrait;



class ContactController extends Controller
{
    use ContactTrait;

    public function index()
    {

        $contact = ContactResource::collection(Contact::get());
        return $this->ContactApiResponse($contact, 'ok', 200);
    }

    public function show($id)
    {

        $contact = Contact::find($id);

        if ($contact) {
            return $this->ContactApiResponse(new ContactResource($contact), 'ok', 200);
        }
        return $this->ContactApiResponse(null, 'The contact Not Found', 404);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->ContactApiResponse(null, $validator->errors(), 400);
        }
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        if ($contact) {
            return $this->ContactApiResponse(new ContactResource($contact), 'The contact Saved', 201);
        }

        return $this->ContactApiResponse(null, 'The contact Not Save', 400);
    }


    public function destroy($id)
    {

        $contact = Contact::find($id);

        if (!$contact) {
            return $this->ContactApiResponse(null, 'The contact Not Found', 404);
        }

        $contact->delete($id);

        if ($contact) {
            return $this->ContactApiResponse(null, 'The contact deleted', 200);
        }
    }
}
