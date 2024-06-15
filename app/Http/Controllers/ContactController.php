<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('Contactus');
    }
    public function store(Request $data){
        $data -> validate([
            'name' =>'required',
            'email' =>'required|unique:users|email',
            'comment' => 'required',
        ]);

        $contact = new Contact();
        $contact->name=request('name');
        $contact->email=request('email');
        $contact->comment=request('comment');
        $contact->save();
        return back();
    }

    public function feedbacks(){
        $feedbacks = Contact::all();

        return view('admin.feedback',compact('feedbacks'));
    }

    public function deletefeed($id){
        $feedbacks = Contact::find($id);
        $feedbacks->delete();
        return redirect('/feedback');
    }

}

