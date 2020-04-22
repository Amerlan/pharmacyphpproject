<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;
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
        $data = books::orderBy('id', 'desc')->take(3)->get();
        return view('home',compact('data'));
    }
}
