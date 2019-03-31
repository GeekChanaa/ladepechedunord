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

    public function forbidden(){
      return view('Forbidden');
    }

    public function economie(){
      return view('economie');
    }
    public function tourisme(){
      return view('tourisme');
    }
    public function societe(){
      return view('societe');
    }
    public function culture(){
      return view('culture');
    }
    public function gazette_maritime(){
      return view('gazettemaritime');
    }
}
