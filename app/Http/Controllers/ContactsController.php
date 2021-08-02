<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;
use App\Models\Contacts;

class ContactsController extends Controller
{
    // public function submit(Request $req) {
    public function submit(ContactsRequest $req) {
        // return "Ok 123";
        // dd($req);
        // dd($req->input('name'));
        // $validation = $req->validate([
        //     'subject' => 'required|min:5|max:50',
        //     'message' => 'required|min:15|max:500'
        // ]);
        $contacts = new Contacts();
        $contacts->name = $req->input('name');
        $contacts->email = $req->input('email');
        $contacts->subject = $req->input('subject');
        $contacts->message = $req->input('message');

        $contacts->save();

        return redirect()->route('home')->with('success', 'Your message added to database');
    }

    public function allData()
    {
        $contacts = new Contacts;
        // dd($contacts->all());

        // return view('messages', ['data' => Contacts::all()]);
        return view('messages', ['data' => $contacts->all()]);
        // return view('messages', ['data' => [$contacts->find(2)]]);
        // return view('messages', ['data' => [$contacts->inRandomOrder()->first()]]);
        // return view('messages', ['data' => $contacts->inRandomOrder()->get()]);
        // return view('messages', ['data' => $contacts->orderBy('id', 'desc')->get()]);
        // return view('messages', ['data' => $contacts->orderBy('id', 'asc')->get()]);
        // return view('messages', ['data' => $contacts->orderBy('id', 'desc')->take(1)->get()]);
        // return view('messages', ['data' => $contacts->orderBy('id', 'desc')->skip(1)->take(1)->get()]);
        // return view('messages', ['data' => $contacts->where('subject', '=', 'Hi')->get()]);
        // return view('messages', ['data' => $contacts->where('subject', '<>', 'Hi')->get()]);
    }

    public function showOneMessage($id)
    {
        $contacts = new Contacts;
        return view('one-message', ['data' => $contacts->find($id)]);
    }

    public function updateMessage($id)
    {
        $contacts = new Contacts;
        return view('update-message', ['data' => $contacts->find($id)]);
    }

    public function updateMessageSubmit($id, ContactsRequest $req) {
       
        $contacts = Contacts::find($id);
        $contacts->name = $req->input('name');
        $contacts->email = $req->input('email');
        $contacts->subject = $req->input('subject');
        $contacts->message = $req->input('message');

        $contacts->save();

        return redirect()->route('contact-data-one', $id)->with('success', 'Your message updated successfuly');
    }

    public function deleteMessage($id)
    {
        Contacts::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Your message has been deleted');
    }
}
