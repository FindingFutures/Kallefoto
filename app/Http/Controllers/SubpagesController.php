<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subpage;
use DB;

class SubpagesController extends Controller
{

  public function showSubpage($title) {
    $subpage = Subpage::where('title', '=', $title)->first();;

    return view('subpage')->withSubpage($subpage);
  }

  public function editSubpage($title) {
    $subpage = Subpage::where('title', '=', $title)->first();

    return view('subpage.edit')->withSubpage($subpage);
  }

  public function updateSubpage(Request $request, $id) {
    $this->validate($request, array(
      'body' => 'required'
    ));

    $subpage = Subpage::where('id', '=', $id)->first();
    $subpage->body = $request->body;
    $subpage->save();

    return back()->withSuccess('Oppdatert!');
  }

}
