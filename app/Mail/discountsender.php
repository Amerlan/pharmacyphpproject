<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class discountsender extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;   //принимаем наше мыло и делаем переменную локальной
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->view('mails.discount')->   // опять смотри папку views/mail файла discount.blade.php
      with([
        'email' => $this->email,   // передаем в этот файл мыло
      ])
      ->subject('Welcome to the Family! You followed for updates');   // Тема письма
    }
}
