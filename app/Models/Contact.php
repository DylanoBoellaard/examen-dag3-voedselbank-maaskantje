<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\ContactPerGezin;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';

    protected $fillable = [
        'straat',
        'huisnummer',
        'toevoeging',
        'woonplaats',
        'email',
        'mobiel',
    ];

    public function contactPerGezin(): BelongsTo
    {
        return $this->belongsTo(ContactPerGezin::class);
    }
}
