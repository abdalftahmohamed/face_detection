<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('contacts.contacts');
    }

    public function create()
    {
        $contacts=Contact::all();
        return view('contacts.index',compact('contacts'));
    }

    public function store(Request $request)
    {
        try {
            $contact = new Contact();
            $contact->name =  $request->name;
            $contact->email =  $request->email;
            $contact->phone = $request->phone;
            $contact->message = $request->message;
            $contact->save();
            session()->flash('Add', trans('notifi.add'));
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function show(Contact $contact)
    {
        //
    }

    public function edit(Contact $contact)
    {

    }

    public function update(Request $request, Contact $contact)
    {
        return "kjnjn";
    }

    public function destroy(Request $request)
    {
        Contact::findorfail($request->id)->delete();
        session()->flash('delete', trans('notifi.delete'));
        return redirect()->back();
    }
    public function about(){
        return view('contacts.about');
    }
}
