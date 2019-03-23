<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\About;

class AboutController extends Controller
{

    public function __construct()
    {
      if(Auth::guest())
      {
        $this->middleware('auth');
      }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, array(
          'body' => 'required',
        ));

        $about = About::find(1);

        $about->body = $request->body;
        $about->save();

        $success = 'Oppdatert!';

        return redirect()->back()->with('success', $success);
    }

}
