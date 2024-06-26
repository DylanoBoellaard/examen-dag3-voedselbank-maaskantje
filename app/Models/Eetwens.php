<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eetwens extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'eetwens';

    // The attributes that are mass assignable.
    protected $fillable = [
        'naam',
        'omschrijving',
    ];
}
