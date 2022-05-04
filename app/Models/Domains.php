<?php

namespace App\Models;

use App\Mail\MailNewDomain;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Domains extends Model
{
    use HasFactory;

    public static function check(){
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
}
