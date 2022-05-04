<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailContact extends Mailable
{
    use Queueable, SerializesModels;

    public Contact $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Interesse in domein '.$this->contact->domein)
        ->markdown('vendor.notifications.email',[  // This is very important line
            'greeting' => 'Beste '.$this->contact->naam,
            'introLines' => [
                "Bedankt voor u interesse in: ".$this->contact->domein,
                "Uw keuze: ".$this->contact->keuze."<br>".
                "Prijs: ".$this->contact->prijs."<br>".
                "Bedrijfsnaam: ".$this->contact->bedrijfsnaam."<br>".
                "Naam: ".$this->contact->naam."<br>".
                "Adres: ".$this->contact->adres."<br>".
                "Postcode: ".$this->contact->postcode."<br>".
                "Woonplaats: ".$this->contact->woonplaats."<br>".
                "Land: ".$this->contact->land."<br>".
                "Email: ".$this->contact->email."<br>".
                "Telefoon: ".$this->contact->telefoon."<br>".
                "Opmerkingen: ".$this->contact->opmerkingen."<br>",
                "Alle genoemde prijzen zijn excl. 21% btw."
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
