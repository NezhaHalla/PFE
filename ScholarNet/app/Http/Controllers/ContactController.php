<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contacts', compact('contacts'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',

        ]);
        if(auth()->user() !== null){
        $validatedData['user_id'] = auth()->user()->id;
        }

        Contact::create($validatedData);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
