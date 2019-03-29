<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subpage;

class SubpagesController extends Controller
{

  public function showSubpage($title) {
    $subpage = Subpage::where('title', '=', $title)->first();;

    return view('subpage')->withSubpage($subpage);
  }

    // public function showSogndal() {
    //   $subpage = Subpage::find(1);
    //   return view('sogndal')->withSubpage($subpage);
    // }
    //
    // public function showLuster() {
    //   $subpage = Subpage::find(2);
    //   return view('luster')->withSubpage($subpage);
    // }
    //
    // public function showBalestrand() {
    //   $subpage = Subpage::find(3);
    //   return view('balestrand')->withSubpage($subpage);
    // }
    //
    // public function showLeikanger() {
    //   $subpage = Subpage::find(4);
    //   return view('leikanger')->withSubpage($subpage);
    // }
    //
    // public function showBilar() {
    //   $subpage = Subpage::find(5);
    //   return view('bilar')->withSubpage($subpage);
    // }

}
