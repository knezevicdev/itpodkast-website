<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public Contact $data;

    public function __construct(Contact $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Contact us form from ' . $this->data->name)
            ->view('emails.contact');
    }
}
