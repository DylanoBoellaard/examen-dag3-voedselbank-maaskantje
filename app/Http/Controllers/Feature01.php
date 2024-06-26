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

    public function Overzicht(Request $request)
    {
        $query = DB::table('gezin')
            ->join('persoon', 'gezin.id', '=', 'persoon.gezinId')
            ->join('contact_Per_Gezin', 'gezin.id', '=', 'contact_Per_Gezin.gezinId')
            ->join('contact', 'contact_Per_Gezin.contactId', '=', 'contact.id')
            ->where('persoon.isvertegenwoordiger', true)
            ->select(
                'persoon.id as persoonId',
                'gezin.naam as gezinNaam',
                DB::raw("CONCAT(persoon.voornaam, ' ', IFNULL(persoon.tussenvoegsel, ''), ' ', persoon.achternaam) as vertegenwoordiger"),
                'contact.email',
                'contact.mobiel',
                DB::raw("CONCAT(contact.straat, ' ', IFNULL(contact.toevoeging, ''), ' ', contact.postcode, ' ', contact.huisnummer) as adres"),
                'contact.woonplaats'
            );

        if ($request->has('postcode') && $request->postcode != '') {
            $query->where('contact.postcode', $request->postcode);
        }

        $data = $query->get();

        return view('klanten/overzicht', ['klant' => $data]);
    }
}
