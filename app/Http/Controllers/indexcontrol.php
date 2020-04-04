<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexcontrol extends Controller
{
  public function index(){
      return view('amado/index');
}
}
