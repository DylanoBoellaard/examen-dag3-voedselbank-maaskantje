<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leverancier extends Model
{
    use HasFactory;

    protected $table = 'leverancier';
    protected $fillable = [
        'naam',
        'contactpersoon',
        'leveranciernummer',
        'leveranciertype',
    ];
}
