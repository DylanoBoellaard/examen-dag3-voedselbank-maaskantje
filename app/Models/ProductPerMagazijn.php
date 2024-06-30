<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPerMagazijn extends Model
{
    use HasFactory;

    protected $table = 'ProductPerMagazijn';

    protected $fillable = [
        'ProductId',
        'MagazijnId',
        'Locatie'
    ];
}
