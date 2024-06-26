<?php

namespace App\Http\Controllers;

use App\Models\Allergie;
use App\Models\Gezin;
use Illuminate\Http\Request;

class AllergieController extends Controller
{
    public function overzicht_gezinsallergieen(Request $request)
    {
        // Get all allergieën from database
        $allergieList = Allergie::all();

        // Get the selected allergie ID from the submitted form filter request
        $selectedAllergieId = $request->input('allergie');

        /* Query to retrieve all gezin and persoon details
            1. Retrieves gezin and persoon details
            2. Joins persoon table
            3. Adds a where requirement where it will only display families with a vertegenwoordiger
            4. Order by family name (gezin.naam), ascending
        */
        $gezinQuery = Gezin::select(
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
            ->orderBy('gezin.naam', 'asc');

        // If an allergie is selected and submitted from HTML, filter the results
        if ($selectedAllergieId) {
            // Join the allergiePerPersoon table and add a where requirement where it will only retrieve people with the selected allergie by using the ID
            $gezinQuery->join('allergiePerPersoon', 'persoon.id', '=', 'allergiePerPersoon.persoonId')
                ->where('allergiePerPersoon.allergieId', '=', $selectedAllergieId);
        }

        // Execute the query, retrieve the results and add it to a variable
        $gezinList = $gezinQuery->get();

        // Redirect user to the overzicht page
        return view('allergie.overzicht_gezinsallergieen', [
            'gezinList' => $gezinList,
            'allergieList' => $allergieList,
            'selectedAllergieId' => $selectedAllergieId
        ]);
    }
}
