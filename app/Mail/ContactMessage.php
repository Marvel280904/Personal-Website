<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public array $payload;

    public function __construct(array $payload)
    {
        $this->payload = $payload;
    }

    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name', 'Portfolio Site'))
                ->replyTo($this->payload['email'], $this->payload['name'])
                ->subject($this->payload['subject'])
                ->view('emails.contact_message', [
                    'name'        => $this->payload['name'],
                    'email'       => $this->payload['email'],
                    'subject'     => $this->payload['subject'],
                    'userMessage' => $this->payload['body'], // <— JANGAN pakai key "message"
                ]);
    }
}
