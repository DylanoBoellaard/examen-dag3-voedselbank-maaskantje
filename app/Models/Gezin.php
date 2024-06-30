<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Persoon;

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

    public function persoon(): BelongsTo
    {
        return $this->belongsTo(Persoon::class);
    }
    public function contactPerGezin(): BelongsTo
    {
        return $this->belongsTo(ContactPerGezin::class);
    }

    // Get the personen for the gezin.
    public function personen()
    {
        return $this->hasMany(Persoon::class, 'gezin_id', 'id');
    }

    // Get the eetwenspergezin for the gezin.
    public function eetwenspergezin()
    {
        return $this->hasMany(Eetwenspergezin::class, 'gezinId', 'id');
    }

    // Get the voedselpakket for the gezin.
    public function voedselpakket()
    {
        return $this->hasMany(Voedselpakket::class, 'gezinId', 'id');
    }
}
