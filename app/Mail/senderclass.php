<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class senderclass extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *THIS CLASS WAS CREATED FOR TEST но может мы его еще используем
     * @return void
     */
     // Принимаем мыло которое передали
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      // Тут мы передаем на нашу вьюшку (смотри папку views/mail)  наше мыло
      // templatemail получает наш емейл.
        return $this->view('mails.templatemail')-> // Это тело письма (содержание)
        with([
          'email' => $this->email,
        ])
        ->subject('New letter'); // Это тема письма
    }
}
