<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Persoon;

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
    ];

    public function persoon(): BelongsTo
    {
        return $this->belongsTo(Persoon::class);
    }
    public function contactPerGezin(): BelongsTo
    {
        return $this->belongsTo(ContactPerGezin::class);
    }
}
