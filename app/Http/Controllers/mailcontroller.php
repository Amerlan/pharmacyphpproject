<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Mail\senderclass;
use App\Mail\discountsender;
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
    Mail::to($email)->send(new discountsender($email));
  }

}