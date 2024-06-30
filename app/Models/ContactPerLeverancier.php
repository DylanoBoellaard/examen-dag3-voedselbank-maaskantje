<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPerLeverancier extends Model
{
    use HasFactory;

    protected $table = 'contactperleverancier';
    protected $fillable = [
        'leverancierid', //foreign key
        'contactid', //foreign key
    ];
}
