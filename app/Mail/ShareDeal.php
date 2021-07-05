<?php

namespace App\Mail;

use App\Models\MailLog;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ShareDeal extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(MailLog $mail_log)
    {
        $this->mail = $mail_log;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('elizarafee@gmail.com')
        ->markdown('emails.deal')
        ->with([
            'email_message' => $this->mail->email_message,
        ]);;
    }
}
