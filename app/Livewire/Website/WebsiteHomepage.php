<?php

namespace App\Livewire\Website;

use App\Models\Domains;
use App\Models\DomainsLog;
use Livewire\Component;


class WebsiteHomepage extends Component
{

    public function mount(){
        Domains::check();
        DomainsLog::putLog();

    }

    public function render()
    {
        $domain = Domains::where('domein', request()->getHttpHost())->first();
        return view('livewire.website.website-homepage', compact('domain'));
    }
}
