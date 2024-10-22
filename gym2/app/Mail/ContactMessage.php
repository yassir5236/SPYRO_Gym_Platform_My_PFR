<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $subject;
    public $messageBody;

    public function __construct($name, $email, $subject, $messageBody)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->messageBody = $messageBody;
    }

    public function build()
    {
        return $this->from('yassiraitlahmadi@gmail.com')
                    ->to(config('mail.admin_email'))
                    ->view('emails.contact-message');
    }
}