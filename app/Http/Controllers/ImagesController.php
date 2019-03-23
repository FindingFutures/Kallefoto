<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function __construct()
    {
      if(Auth::guest())
      {
        $this->middleware('auth');
      }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
}
