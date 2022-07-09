<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('contact');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $contacts = Contact::orderByDesc('created_at')->get();
        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return $this->edit(new Contact(), ['method' => 'post', 'action' =>route('admin.contact.store')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        return $this->update($request, new Contact());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     */
    public function edit(Contact $contact, $params = [])
    {
        if ($contact->exists)
            $params = ['method' => 'put', 'action' => route('admin.contact.update', $contact)];
        $params['contact'] = $contact;
        return view('admin.contact.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     */
    public function update(Request $request, Contact $contact)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);

        $contact->fill($request->all());
        $contact->save();

        return redirect()->route('admin.contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contact.index');
    }
}
