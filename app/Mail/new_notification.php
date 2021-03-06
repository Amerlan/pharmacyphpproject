<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class new_notification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $token)
    {
        $this->data = $data;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
     public function build()
     {
       return $this->view('mails.notification')->   // смотри папку views/mail файла notification.blade.php
       with([
         'product' => $this->data,
         'token' =>$this->token,
       ])
       ->subject('HO-HO-HO. We have something interesting for YOU');   // Тема письма
     }
}
