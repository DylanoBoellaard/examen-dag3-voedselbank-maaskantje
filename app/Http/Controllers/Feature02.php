<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Models\ContactPerGezin;
use app\Models\Contact;
use app\Models\Gezin;
use app\Models\Persoon;

class Feature02 extends Controller
{
    public function Klant($persoonId)
    {
        $klanten = DB::table('gezin')
            ->join('persoon', 'gezin.id', '=', 'persoon.gezinId')
            ->join('contact_Per_Gezin', 'gezin.id', '=', 'contact_Per_Gezin.gezinId')
            ->join('contact', 'contact_Per_Gezin.contactId', '=', 'contact.id')
            ->where('persoon.id', '=', $persoonId)
            ->select(
                'persoon.voornaam',
                'persoon.tussenvoegsel',
                'persoon.achternaam',
                'persoon.geboortedatum',
                'persoon.typePersoon',
                'persoon.isvertegenwoordiger',
                'contact.straat',
                'contact.huisnummer',
                'contact.toevoeging',
                'contact.postcode',
                'contact.woonplaats',
                'contact.email',
                'contact.mobiel'
            )
            ->get();

        return view('klanten/klantdetails', ['klanten' => $klanten]);
    }
    public function Wijzig()
    {
        $klant = DB::table('gezin')
            ->join('persoon', 'gezin.id', '=', 'persoon.gezinId')
            ->join('contact_Per_Gezin', 'gezin.id', '=', 'contact_Per_Gezin.gezinId')
            ->join('contact', 'contact_Per_Gezin.contactId', '=', 'contact.id')
            ->where('persoon.id', '=', 8)
            ->select(
                'persoon.id as persoonId',
                'persoon.voornaam',
                'persoon.tussenvoegsel',
                'persoon.achternaam',
                'persoon.geboortedatum',
                'persoon.typePersoon',
                'persoon.isvertegenwoordiger',
                'contact.straat',
                'contact.huisnummer',
                'contact.toevoeging',
                'contact.postcode',
                'contact.woonplaats',
                'contact.email',
                'contact.mobiel'
            )
            ->first(); // Use first() to get a single instance

        return view('klanten.wijzigklant', compact('klant'));
    }
}
