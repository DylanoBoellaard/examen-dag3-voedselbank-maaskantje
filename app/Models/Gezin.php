<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gezin extends Model
{
    use HasFactory;

    protected $table = 'gezin';

    protected $fillable = [
        'naam',
        'code',
        'omschrijving',
        'aantalVolwassenen',
        'aantalKinderen',
        'aantalBabys',
        'totaalAantalPersonen',
        'isActief',
        'opmerkingen',
        'created_at',
        'updated_at',
    ];
}
