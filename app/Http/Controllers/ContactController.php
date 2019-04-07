<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;
use App\Mail\contactSubmission;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class ContactController extends Controller
{

    public function create(Request $request){

      $this->validate($request, array(
        'name' => 'required',
        'email' => 'required|email',
        'body' => 'required|max:10000',
        'phone' => 'required'
      ));

      $contact = new Contact;

      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->phone = $request->phone;
      $contact->body = $request->body;

      $contact->save();

      Mail::to('endrest@hotmail.no')->send(new contactSubmission($contact));

      $success = 'Melding sent!';
      return Redirect::to(URL::previous() . "#footer")->withSuccess($success);

    }

}
