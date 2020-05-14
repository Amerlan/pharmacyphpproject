<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;
class HomeController extends Controller
{

    public function index()
    {
        $data = books::orderBy('id', 'desc')->take(5)->get();
        return view('home',compact('data'));
    }
}
