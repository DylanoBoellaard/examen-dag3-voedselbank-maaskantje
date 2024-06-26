<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productpervoedselpakket extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'productpervoedselpakket';

    // The attributes that are mass assignable.
    protected $fillable = [
        'voedselpakketId',
        'productId',
        'aantalproducteneenheden',
    ];
}
