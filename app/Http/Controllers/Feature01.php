<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Models\ContactPerGezin;
use app\Models\Contact;
use app\Models\Gezin;
use app\Models\Persoon;

class Feature01 extends Controller
{
    public function Home()
    {
        return view('klanten/homepage');
    }

    public function Overzicht()
    {
        $data = DB::table('gezin')
            ->join('persoon', 'gezin.id', '=', 'persoon.gezinId')
            ->join('contact_Per_Gezin', 'gezin.id', '=', 'contact_Per_Gezin.gezinId')
            ->join('contact', 'contact_Per_Gezin.contactId', '=', 'contact.id')
            ->select(
                'gezin.naam as gezinNaam',
                DB::raw("CONCAT(persoon.voornaam, ' ', IFNULL(persoon.tussenvoegsel, ''), ' ', persoon.achternaam) as vertegenwoordiger"),
                'contact.email',
                'contact.mobiel',
                DB::raw("CONCAT(contact.straat, ' ', IFNULL(contact.toevoeging, ''), ' ', contact.postcode, ' ', contact.huisnummer) as adres"),
                'contact.woonplaats'
            )
            ->get();

        return view('klanten/overzicht', ['klant' => $data]);
    }
}
