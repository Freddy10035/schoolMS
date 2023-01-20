<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // //
    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'message' => 'required',
    //     ]);

    //     $contact = new Contact;
    //     $contact->name = $request->name;
    //     $contact->email = $request->email;
    //     $contact->message = $request->message;
    //     $contact->save();

    //     return response()->json(['message' => 'Contact Form Submitted Successfully']);
    // }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    // Store the contact data in the database
    $contact = new Contact;
    $contact->name = $validatedData['name'];
    $contact->email = $validatedData['email'];
    $contact->message = $validatedData['message'];
    $contact->save();

    return response()->json(['message' => 'Contact information stored successfully']);
}
    
}
