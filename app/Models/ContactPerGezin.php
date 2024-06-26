<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Gezin;
use App\Models\Contact;

class ContactPerGezin extends Model
{
    use HasFactory;

    protected $table = 'contactPerGezin';

    protected $fillable = [
        'gezinId',
        'contactId',
    ];

    public function hasgezin(): HasOne
    {
        return $this->HasOne(Gezin::class);
    }

    public function hascontact(): HasOne
    {
        return $this->HasOne(Contact::class);
    }
}
