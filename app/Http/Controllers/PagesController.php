<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Bilde;

class PagesController extends Controller
{

    public function showIndex(){
      $images = Bilde::inRandomOrder()->get()->reverse()->take('15');
      return view('index')->withImages($images);
    }

    public function showAbout(){
      $about = About::find('1');
      return view('om_kallefoto')->withAbout($about);
    }

    public function showContact(){
      return view('kontakt');
    }
}
