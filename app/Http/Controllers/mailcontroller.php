<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Mail\senderclass;
use App\Mail\discountsender;
use App\subscriptionlist;
class mailcontroller extends Controller
{

  public static function send(Request $request)    // ЭТА функция была написана чтоб проверить как работает отправка сбщ
  {
      $email = $request->email;

      Mail::to($email)->send(new senderclass($email));

  }
  public function discount(Request $request)   //Это собсна функция отправки сообщений на мыло
  {
    $email = $request->email;   //Так как метод POST, мы в функцию получаем Реквест. Из реквеста достаем
                              //переменную и отправляем её в discountsender (это mail class, в видосе говорится как создать)
                              // mail class находятся в app\mail
  if (subscriptionlist::where('email', $request->email)->exists()) {

   return redirect('success');   // if email exists in table
  }
  else{
    $subscriptionlist = new subscriptionlist;
    $subscriptionlist->email = $email;
    $subscriptionlist->save();
    Mail::to($email)->send(new discountsender($email));
    return redirect('shop');   // После успешной регистрации, редайрект будет на шоп пейдж

  }
  }

}
