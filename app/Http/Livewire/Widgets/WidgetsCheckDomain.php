<?php

namespace App\Http\Livewire\Widgets;

use App\Mail\MailNewDomain;
use App\Models\Domains;
use App\Models\DomainsLog;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class WidgetsCheckDomain extends Component
{

    public function mount(){
        $item = Domains::where('domein', request()->getHttpHost())->first();
        if($item == null){
            $item = new Domains();
            $item->domein = request()->getHttpHost();
            $item->prijs_kopen = 2500;
            $item->prijs_huren = 25;
            $item->save();
            Mail::to(env('MAIL_TO_ADDRESS'))->send(new MailNewDomain(request()->getHttpHost()));
        }
    }

    public function render()
    {
        return view('livewire.widgets.widgets-check-domain');
    }
}
