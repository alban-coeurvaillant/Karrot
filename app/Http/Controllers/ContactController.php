<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\Contact as ContactMailable;
use App\Rules\ValidHCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            'message' => 'required',
            'h-captcha-response' => ['required', new ValidHCaptcha()]
        ]);

        $contact = Contact::create($request->all());
        Mail::send(new ContactMailable($contact));

        return back()->withConfirmation('Votre demande a bien été envoyée.');
    }
}
