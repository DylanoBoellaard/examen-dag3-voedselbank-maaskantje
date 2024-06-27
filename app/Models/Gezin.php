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
