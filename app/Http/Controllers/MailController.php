<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
 public function mail(Request $request)
 {
     //On utilise la facade mail et on envoi à test@gmail.com l'instance de MyMail 
     //en lui passant la variable $request
     Mail::to('test@gmail.com')->send(new MyMail($request));

    return view('emails.sendmail');
 }
}
