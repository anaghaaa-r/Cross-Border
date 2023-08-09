<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookingData extends Mailable
{
    use Queueable, SerializesModels;

    public $bookingData;
    public $subject;

    /**
     * Create a new message instance.
     */
    public function __construct(array $bookingData, string $subject)
    {
        $this->bookingData = $bookingData;
        if(isset($this->bookingData['selectedPackage']))
        {
            $this->bookingData['selectedPackage'] = json_decode($this->bookingData['selectedPackage'], true);
        }
        $this->subject = $subject;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'email.booking_data',
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
