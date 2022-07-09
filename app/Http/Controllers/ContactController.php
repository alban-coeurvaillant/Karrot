<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('contact');
    }

    public function index()
    {
        return view('front.contact.index');
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $contact = Contact::create($request->all());


        return back()->withConfirmation('Votre demande a bien été envoyée.');
    }
}
