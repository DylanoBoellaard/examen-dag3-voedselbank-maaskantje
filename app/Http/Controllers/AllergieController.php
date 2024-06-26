<?php

namespace App\Http\Controllers;

use App\Models\Gezin;
use Illuminate\Http\Request;

class AllergieController extends Controller
{
    public function overzicht_gezinsallergieen()
    {
        // US1 - Scenario 01: happy
        // Get all gezin details and sort by gezin.naam ascending
        $gezinList = Gezin::select(
            'gezin.naam as gezin_naam',
            'gezin.omschrijving',
            'gezin.aantalVolwassenen',
            'gezin.aantalKinderen',
            'gezin.aantalBabys',
            'persoon.voornaam as vertegenwoordiger_voornaam',
            'persoon.tussenvoegsel as vertegenwoordiger_tussenvoegsel',
            'persoon.achternaam as vertegenwoordiger_achternaam'
        )
            ->join('persoon', 'gezin.id', '=', 'persoon.gezinId')
            ->where('persoon.isVertegenwoordiger', '=', 1)
            ->orderBy('gezin.naam', 'asc')
            ->get();

        // Redirect user to the overzicht page
        return view('allergie.overzicht_gezinsallergieen', [
            'gezinList' => $gezinList
        ]);
    }
}
