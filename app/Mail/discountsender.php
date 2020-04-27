<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class discountsender extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct($token)
    {
        $this->token = $token->token;
    }


    public function build()
    {
      return $this->view('mails.discount')->   // опять смотри папку views/mail файла discount.blade.php
      with([
        'token' => $this->token,
      ])
      ->subject('Welcome to the Family! You followed for updates');   // Тема письма
    }
}
