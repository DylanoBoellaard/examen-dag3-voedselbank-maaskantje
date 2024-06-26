<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voedselpakket extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'voedselpakket';

    // The attributes that are mass assignable.
    protected $fillable = [
        'gezinId',
        'pakketnummer',
        'datumsamenstelling',
        'datumuitgifte',
        'status',
    ];
}
