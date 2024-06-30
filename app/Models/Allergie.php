<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergie extends Model
{
    use HasFactory;

    // Tells Laravel / model to use this name to find the correct table
    protected $table = 'allergie';

    // Allows these values to be used for creating, editing or deleting
    protected $fillable = [
        'naam',
        'omschrijving',
        'anafylactischRisico',
        'isActief',
        'opmerkingen',
        'created_at',
        'updated_at',
    ];

    // Defines the relationship. One allergy can have many persons
    public function allergiePerPersoon()
    {
        return $this->hasMany(AllergiePerPersoon::class, 'allergieId');
    }
}
