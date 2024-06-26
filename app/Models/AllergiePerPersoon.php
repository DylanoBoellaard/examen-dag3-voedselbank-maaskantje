<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllergiePerPersoon extends Model
{
    use HasFactory;

    protected $table = 'allergiePerPersoon';

    protected $fillable = [
        'persoonId',
        'allergieId',
        'isActief',
        'opmerkingen',
        'created_at',
        'updated_at',
    ];
}
