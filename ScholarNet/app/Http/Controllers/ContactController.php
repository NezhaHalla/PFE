<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;
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
        Contact::create($validatedData);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
    public function show($id)
    {
        $contact = Contact::findOrFail($id);

        $contact->is_read = true;
        $contact->save();

        $unreadMessageCount = Contact::where('is_read', false)->count();

        view()->share('unreadMessageCount', $unreadMessageCount);

        return view('admin.contactsdetails', compact('contact'));
    }
}
