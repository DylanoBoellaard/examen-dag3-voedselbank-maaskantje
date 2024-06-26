<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persoon extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'persoon';

    // The attributes that are mass assignable.
    protected $fillable = [
        'gezin_id',
        'voornaam',
        'tussenvoegsel',
        'achternaam',
        'geboortedatum',
        'typepersoon',
        'isvertegenwoordiger',
    ];
}
