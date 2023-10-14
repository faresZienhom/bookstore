<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('front.pages.contact.contact');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'max:50', 'string'],
            'email' => ['required', 'max:50', 'email'],
            'phone' => ['required'],
            'subject' => ['required', 'max:250', 'string'],
            'content' => ['required', 'max:500', 'string'],
        ]);

        Contacts::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'content' => $request->content,
        ]);

        return back()->with('message', 'نم ارسال الرساله بنجاح');
    }
}
