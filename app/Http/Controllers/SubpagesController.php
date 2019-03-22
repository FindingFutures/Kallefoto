<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubpagesController extends Controller
{
    public function showBalestrand() {
      return view('balestrand');
    }

    public function showSogndal() {
      return view('sogndal');
    }

    public function showLuster() {
      return view('luster');
    }

    public function showLeikanger() {
      return view('leikanger');
    }

    public function showBilar() {
      return view('bilar');
    }

}
