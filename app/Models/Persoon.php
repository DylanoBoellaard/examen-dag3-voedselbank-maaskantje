<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persoon extends Model
{
    use HasFactory;

    protected $table = 'persoon';

    protected $fillable = [
        'gezinId',
        'voornaam',
        'tussenvoegsel',
        'achternaam',
        'geboortedatum',
        'typePersoon',
        'isVertegenwoordiger',
        'isActief',
        'opmerkingen',
        'created_at',
        'updated_at',
    ];
}
