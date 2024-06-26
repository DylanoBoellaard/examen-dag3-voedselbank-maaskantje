<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persoon extends Model
{
    use HasFactory;

    // Tells Laravel / model to use this name to find the correct table
    protected $table = 'persoon';

    // Allows these values to be used for creating, editing or deleting
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

    // Defines the relationship. One person can have many allergies
    public function allergiePerPersoon()
    {
        return $this->hasMany(AllergiePerPersoon::class, 'persoonId');
    }
}
