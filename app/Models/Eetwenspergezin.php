<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eetwenspergezin extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'eetwenspergezin';

    // The attributes that are mass assignable.
    protected $fillable = [
        'gezinId',
        'eetwensId',
    ];
}
