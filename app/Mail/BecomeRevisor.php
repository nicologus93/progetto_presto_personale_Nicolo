<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class BecomeRevisor extends Mailable
{
    use Queueable, SerializesModels;

public $user;
public $message;

    /**
     * Create a new message instance.
     */
    public function __construct(User $user, $message)
    {
        $this->user = $user;
        $this->message = $message;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->user->email, $this->user->name),
            subject: 'Ciao! un utente ha chiesto di diventare revisore'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.becomeRevisor',
            with: ['messaggioj'=> $this->message],
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
