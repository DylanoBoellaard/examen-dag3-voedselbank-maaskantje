<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gezin extends Model
{
    use HasFactory;

    // Tells Laravel / model to use this name to find the correct table
    protected $table = 'gezin';

    // Allows these values to be used for creating, editing or deleting
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
