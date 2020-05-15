<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Mail\discountsender;
use App\subscriptionlist;
use App\books;

class mailcontroller extends Controller
{

  public function subscribe(Request $request)   //Это собсна функция отправки сообщений на мыло
  {
    $email = $request->email;
    $data = books::orderBy('id', 'desc')->take(4)->get();


    if (subscriptionlist::where('email', $email)->exists()) {
      subscriptionlist::where('email', $email)->update(['notify' => 1, 'token' =>md5(rand(32, 48) . microtime())]);
      return view('home',['data'=>$data, 'status'=>1]);
    }
      else{

            $subscriptionlist = new subscriptionlist;
            $subscriptionlist->email = $email;
            $subscriptionlist->token = md5(rand(32, 48) . microtime());
            $subscriptionlist->save();
            $token = subscriptionlist::where('email',$email)->get('token')[0];
            Mail::to($email)->send(new discountsender($token));

            return view('home',['data'=>$data, 'status'=>2]);
          }
      }


  public function unsubscribe(Request $request, $token)
  {
    subscriptionlist::where('token', $token)->update(['notify' => 0]);
    return redirect('shop');
  }


}
