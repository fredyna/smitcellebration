<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrationAcceptMail extends Mailable
{
    use Queueable, SerializesModels;

    public $participant;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($participant)
    {
        $this->participant = $participant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Konfirmasi Pembayaran Registrasi SMIT Cellebration')
                    ->markdown('emails.registration.registrationaccept');
    }
}
