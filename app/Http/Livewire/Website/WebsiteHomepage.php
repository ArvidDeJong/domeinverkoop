<?php

namespace App\Http\Livewire\Website;

use App\Models\Domains;
use Livewire\Component;

class WebsiteHomepage extends Component
{
    public function render()
    {
        $domain = Domains::where('domein', request()->getHttpHost())->first();
        return view('livewire.website.website-homepage', compact('domain'));
    }
}
