<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SuppurtEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $content;
    public $subject;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $content, $subject)
    { //this will be passed to email view
        $this->name    = $name;
        $this->content = $content;
        $this->subject = $subject;
        
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
            // from: new Address("", "sender mk"),
            // replyTo: new Address("", "receiver rz"),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.welcomeEmail', //the variables of constructor will be passed automaitcally to the view
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
