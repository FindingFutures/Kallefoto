<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class PagesController extends Controller
{

    public function showIndex(){
      return view('index');
    }

    public function showAbout(){
      $about = About::find('1');
      return view('om_kallefoto')->withAbout($about);
    }

    public function showContact(){
      return view('kontakt');
    }
}
