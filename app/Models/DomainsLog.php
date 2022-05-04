<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainsLog extends Model
{
    use HasFactory;

    public static function putLog(){
        $log = new DomainsLog();
        $log->domein = request()->getHttpHost();
        $log->ip = request()->ip();
        $log->agent = request()->userAgent();
        $log->save();
    }
}
