<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gezin extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'gezin';

    // The attributes that are mass assignable.
    protected $fillable = [
        'naam',
        'code',
        'omschrijving',
        'aantalvolwassenen',
        'aantalkinderen',
        'aantalbabys',
        'totaalpersonen',
    ];

    public function personen()
    {
        return $this->belongsTo(Persoon::class);
    }

    public function eetwenspergezin()
    {
        return $this->belongsTo(Eetwenspergezin::class);
    }
}
