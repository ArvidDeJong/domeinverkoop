<?php

namespace App\Http\Livewire\Website;

use App\Mail\MailContact;
use App\Models\Contact;
use App\Models\Domains;
use App\Models\DomainsLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class WebsiteContact extends Component
{

    public $keuze;
    public $bedrijfsnaam;
    public $naam;
    public $adres;
    public $postcode;
    public $woonplaats;
    public $land = 'Nederland';
    public $email;
    public $telefoon;
    public $opmerkingen;
    public $bieding;
    public $btw;
    public $prijs;

    public $stored = false;
    public Domains $domain;

    public function mount(Request $request){
        Domains::check();


        $this->keuze = $request->input('keuze');
        $this->domain = Domains::where('domein', request()->getHttpHost())->first();
    }

    public function render()
    {
        return view('livewire.website.website-contact');
    }

    public function submit()
    {

        $this->validate([
            'keuze' => 'required',
            'naam' => 'required',
            'adres' => 'required',
            'postcode' => 'required',
            'woonplaats' => 'required',
            'land' => 'required',
            'email' => 'required',
            'telefoon' => 'required'
        ],[
            'keuze.required' => 'Wilt u het domein kopen of huren?',
            'naam.required' => 'Uw naam is verplicht',
            'adres.required' => 'Uw adres is verplicht',
            'postcode.required' => 'Uw postcode is verplicht',
            'woonplaats.required' => 'Uw woonplaats is verplicht',
            'land.required' => 'Uw land is verplicht',
            'email.required' => 'Uw email is verplicht',
            'telefoon.required' => 'Uw telefoon is verplicht',
        ]);



        $item = Contact::create([
            'domein' => request()->getHttpHost(),
            'keuze' => $this->keuze,
            'naam' => $this->naam,
            'adres' => $this->adres,
            'postcode' => $this->postcode,
            'woonplaats' => $this->woonplaats,
            'land' => $this->land,
            'email' => $this->email,
            'telefoon' => $this->telefoon,
            'bedrijfsnaam' => $this->bedrijfsnaam,
            'opmerkingen' => $this->opmerkingen,
            'bieding' => $this->bieding,
            'btw' => $this->btw,
            'prijs' => $this->keuze == 'Huren' ? $this->domain->prijs_huren : $this->domain->prijs_kopen,
        ]);

        Mail::to(env('MAIL_TO_ADDRESS'))->send(new MailContact($item));
        // Mail::to($this->email)->send(new MailContact($item));

        $this->stored = true;
    }
}
