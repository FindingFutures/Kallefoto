<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;
use App\Mail\contactSubmission;

class ContactController extends Controller
{

    public function create(Request $request){

      $this->validate($request, array(
        'name' => 'required',
        'email' => 'required|email',
        'body' => 'required|max:10000'
      ));

      $contact = new Contact;

      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->body = $request->body;

      $contact->save();

      Mail::to('tobiasbarsnes@gmail.com')->send(new contactSubmission($contact));
      //Mail::to($request->email)->send(new contactSubmission($contact));

      $success = 'Melding sent!';
      return back()->withSuccess($success);

    }

}
