<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function departments()
    {
        return view('departments');
    }

    public function settings()
    {
        return view('settings');
    }

    public function page()
    {
        return view('page');
    }
    //written just for test; rewrite if incorrect
    public function error()
    {
        return view('errors/404');
    }
}
