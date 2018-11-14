<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\signals;
use App\categories;

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
    public function index(Request $request)
    {
        $data = [];
        $signals = signals::all();
        //dd($signals);
        $categories = categories::all();
        $data['signals'] = $signals;
        $data['categories'] = $categories;
        return view('client.index',$data);
    }
}
