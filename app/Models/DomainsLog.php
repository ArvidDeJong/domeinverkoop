<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainsLog extends Model
{
    use HasFactory;

    public static function putLog(){
        $log = DomainsLog::where('ip', request()->ip())->first();
        if($log == null){
            $log = new DomainsLog();
            $log->count = 1;
        } else {
            $log->count = $log->count + 1;
        }
        $log->domein = request()->getHttpHost();
        $log->ip = request()->ip();
        $log->agent = request()->userAgent();
        $log->save();
    }
}
