<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergie extends Model
{
    use HasFactory;

    protected $table = 'allergie';

    protected $fillable = [
        'naam',
        'omschrijving',
        'anafylactischRisico',
        'isActief',
        'opmerkingen',
        'created_at',
        'updated_at',
    ];
}
