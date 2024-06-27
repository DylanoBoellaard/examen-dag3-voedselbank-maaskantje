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

    // Get the gezin that owns the eetwenspergezin.
    public function gezin()
    {
        return $this->belongsTo(Gezin::class, 'gezin');
    }

    // Get the eetwens that owns the eetwenspergezin.
    public function eetwens()
    {
        return $this->belongsTo(Eetwens::class, 'eetwensId', 'id');
    }
}
