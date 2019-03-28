<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Subpage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $about = About::find(1);
        $subpages = Subpage::get();

        return view('home')->withAbout($about)->withSubpages($subpages);
    }
}
