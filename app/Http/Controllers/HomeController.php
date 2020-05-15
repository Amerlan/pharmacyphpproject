<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;
class HomeController extends Controller
{

    public function index()
    {
        $data = books::orderBy('id', 'desc')->take(4)->get();
        return view('home',compact('data'));
    }
}
