<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class indexcontrol extends Controller
{
  public function index(){
      return view('/home');
}
}
