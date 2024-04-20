<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view('contact');
    }


    public function store(Request $request)
    {
        //validar la data
        $validated = $request->validate([
            'name' => 'required|max:30|min:3',
            'org' => 'max:30',
            'email' => 'required|email',
            'subject' => 'max:30',
            'msg' => 'required|min:3',
            'g-recaptcha-response' => 'recaptcha'
        ]);

        if($validated){
            Mail::to('fabricio.rivera2012@gmail.com')->send(new Contact($validated));
            return redirect()->route('contact.index', app()->getLocale())->with('success', 'Message send');
        }else{
            return redirect()->route('contact.index', app()->getLocale())->with('error', 'Message not send');
        }
    }
}
