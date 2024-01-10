<?php

namespace sesm\Http\Controllers;

use Illuminate\Http\Request;
use sesm\Kid;


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
        return view('home');
    }

    public function search(Request $request){
        $keySearch = $request->input('search');
        $results = Kid::where('name', 'LIKE', "%{$keySearch}%")->get();
        return view('home', compact('results'));
    }
}
