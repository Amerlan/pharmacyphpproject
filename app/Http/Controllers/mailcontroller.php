<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Mail\discountsender;
use App\subscriptionlist;

class mailcontroller extends Controller
{

  public function subscribe(Request $request)   //Это собсна функция отправки сообщений на мыло
  {
    $email = $request->email;


    if (subscriptionlist::where('email', $email)->exists()) {
      subscriptionlist::where('email', $email)->update(['notify' => 1, 'token' =>md5(rand(32, 48) . microtime())]);
      return redirect('success');
    }
      else{

            $subscriptionlist = new subscriptionlist;
            $subscriptionlist->email = $email;
            $subscriptionlist->token = md5(rand(32, 48) . microtime());
            $subscriptionlist->save();
            $token = subscriptionlist::where('email',$email)->get('token')[0];
            Mail::to($email)->send(new discountsender($token));

            return redirect('shop');   // После успешной регистрации, редайрект будет на шоп пейдж
          }
      }


  public function unsubscribe(Request $request, $token)
  {
    subscriptionlist::where('token', $token)->update(['notify' => 0]);
    return redirect('shop');
  }


}
