<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailtrapExample extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('atk@galalon.me', 'Alon The King!')
            ->subject('Mailtrap Confirmation')
            ->view('emails.mailtrap')
            ->with([
                'name' => 'New Mailtrap User',
                'link' => 'https://mailtrap.io/inboxes',
                'pathToImage' => 'https://receiptsanalyser.loyaltyplatform.net/storage/receipts/atk.jpg',
            ])
            ->attach('https://receiptsanalyser.loyaltyplatform.net/storage/receipts/atk.jpg');
    }
}
