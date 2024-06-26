<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Gezin;

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
    ];

    public function hasgezin(): HasOne
    {
        return $this->hasOne(Gezin::class);
    }
}
