<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class senderclass extends Mailable
{
    use Queueable, SerializesModels;


     // Принимаем мыло которое передали
    public function __construct($orderinfo, $cart, $name)
    {
      $this->cart = $cart;
      $this->checkout = $orderinfo;
      $this->name = $name;
    }


    public function build()
    {
      // Тут мы передаем на нашу вьюшку (смотри папку views/mail)  наше мыло
      // templatemail получает наш емейл.

        return $this->view('mails.buymail')-> // Это тело письма (содержание)
        with([
          'cart' => $this->cart,
          'checkinfo' => $this->checkout,
          'name' =>$this->name,
          ])
        ->subject('Order confirmation. Your order number is '.$this->checkout['id']); // Это тема письма
    }
}
