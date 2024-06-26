<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPerLeverancier extends Model
{
    use HasFactory;

    protected $table = 'productperleverancier';
    protected $fillable = [
        'leverancierid', // foreign key
        'productid',   // foreign key
        'datumaangeleverd',
        'datumeerstvolgendelevering',
    ];
}
