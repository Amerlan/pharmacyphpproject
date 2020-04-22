<?php

namespace App\Http\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function index()
    {
      return view('auth.passwords.change');
    }
    public function changepassword(Request $request)
    {
      $current_password = Auth::User()->password;
      if(Hash::check($request_data['current-password'], $current_password))
      {
        $user_id = Auth::User()->id;
        $obj_user = User::find($user_id);
        $obj_user->password = Hash::make($request_data['password']);;
        $obj_user->save();

      }
    }
}
