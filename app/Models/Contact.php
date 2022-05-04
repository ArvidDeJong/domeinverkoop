<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'domein',
        'keuze',
        'bedrijfsnaam',
        'naam',
        'adres',
        'postcode',
        'woonplaats',
        'land',
        'email',
        'telefoon',
        'opmerkingen',
        'bieding',
        'btw',
        'prijs',
    ];
}
