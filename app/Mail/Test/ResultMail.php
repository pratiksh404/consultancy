<?php

namespace App\Mail\Test;

use App\Models\Admin\Candidate;
use App\Models\Admin\Test;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ResultMail extends Mailable
{
    use Queueable, SerializesModels;

    public $test;

    public $candidate;

    /**
     * Create a new message instance.
     */
    public function __construct(Test $test, Candidate $candidate)
    {
        $this->test = $test;
        $this->candidate = $candidate;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(env('MAIL_FROM_ADDRESS'), title()),
            replyTo: [
                new Address($this->candidate->email),
            ],
            subject: 'Your results are out for '.$this->test->name.' held on '.Carbon::create($this->test->test_date)->format('Y-m-d').'.',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.test.result-mail',
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