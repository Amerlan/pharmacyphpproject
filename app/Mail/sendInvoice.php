<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendInvoice extends Mailable
{
    use Queueable, SerializesModels;


     public function __construct($orderinfo, $cart, $card)
     {
       $this->cart = $cart;
       $this->checkout = $orderinfo;
       $this->card = $card;
     }


    public function build()
    {
      return $this->view('mails.invoice')->
      with([
        'cart' => $this->cart,
        'data' => $this->checkout,
        'card' => $this->card,
      ])
      ->subject('Thanks! Your bill number is'.$this->checkout['id']);
    }
}
