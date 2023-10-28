<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
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

    public function show(Contacts $contacts)
    {
        //
    }

    public function edit(Contacts $contacts)
    {
        //
    }

    public function update(Request $request, Contacts $contacts)
    {
        //
    }

    public function destroy(Contacts $contacts)
    {
        //
    }
}
