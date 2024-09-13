<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewLeadExperience extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public $fechallegada,
        public $adultos,
        public $kids,
        public $name,
        public $tel,
        public $mail,
        public $masexperiencias,
        public $message,
        public $titulo,
    ) {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Lead Experience',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.newleadexperience',
            with: [
                'fechallegada' => $this->fechallegada,
                'adultos' => $this->adultos,
                'kids' => $this->kids,
                'name' => $this->name,
                'tel' => $this->tel,
                'mail' => $this->mail,
                'masexperiencias' => $this->masexperiencias,
                'message' => $this->message,
                'title' => $this->titulo,
            ],
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
