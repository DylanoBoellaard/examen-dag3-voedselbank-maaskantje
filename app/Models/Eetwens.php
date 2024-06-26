<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function gezinnen() : BelongsTo
    {
        return $this->belongsTo(Eetwenspergezin::class, 'eetwenspergezin'); 
    }
}
