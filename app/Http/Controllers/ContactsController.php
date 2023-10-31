<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    public function all_contacts()
    {
        $contacts = Contacts::all();
        return view('backend.contact.all_contact' , compact('contacts'));
    }

    public function store(Request $request)
    {
        $name      = $request->name;
        $email     = $request->email;
        $subject   = $request->subject;
        $message   = $request->message;

        $contacts = Contacts::create([
            'name'     => $name,
            'email'    => $email,
            'subject'  => $subject,
            'message'  => $message,
        ]);

        $contacts->save();

        return redirect()->back();
    }


    public function destroy($id)
    {
        $contacts = Contacts::find($id);
        $contacts->delete();

        return redirect()->route('backend.contact.all_contacts')->with('success' , 'the contact is deleted successfuly');
    }
}
