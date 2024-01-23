<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail()
    {
        Mail::to('fabricio.rivera2012@gmail.com')->send(new Contact());

        return view('welcome');
    }
}
