<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailNewDomain extends Mailable
{
    use Queueable, SerializesModels;

    public $domein;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($domein)
    {
        $this->domein = $domein;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nieuw domein geregistreerd '.$this->domein)
        ->markdown('vendor.notifications.email',[  // This is very important line
            'greeting' => 'Beste Arvid',
            'introLines' => [
                " Op lemmings.nl is het volgende domein is toegevoegd: ".$this->domein,
            ],
            // 'actionText' => 'Ga naar de website',
            // 'actionUrl' => env('APP_URL'),
            // 'displayableActionUrl' => env('APP_URL'),
            'outroLines' => [],
            'level' => 'success',
            'line'    => 'blaad',
        ]);
    }
}
