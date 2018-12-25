<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function list()
    {
        $contacts = Contact::all();
        return view('admin.contact.list',compact('contacts'));
    }
    public function store(Request $request)
    {
        $contact = new Contact;

        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->subject = $request->get('subject');
        $contact->description = $request->get('message');

        $contact->save();

        return redirect('admin/contacts')->with(['success'=>'succesfully added']);
    }
}
