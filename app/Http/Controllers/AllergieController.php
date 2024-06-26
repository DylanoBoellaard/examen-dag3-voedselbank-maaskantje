<?php

namespace App\Http\Controllers;

use App\Models\Allergie;
use App\Models\Gezin;
use App\Models\Persoon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllergieController extends Controller
{
    // Function to display all families and their details
    public function overzicht_gezinnen(Request $request)
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
            'gezin.id',
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

        // If an allergy is selected and submitted from HTML, filter the results
        if ($selectedAllergieId) {
            // Join the allergiePerPersoon table and add a where requirement where it will only retrieve people with the selected allergie by using the ID
            $gezinQuery->join('allergiePerPersoon', 'persoon.id', '=', 'allergiePerPersoon.persoonId')
                ->where('allergiePerPersoon.allergieId', '=', $selectedAllergieId);
        }

        // Execute the query, retrieve the results and add it to a variable
        $gezinList = $gezinQuery->get();

        // Redirect user to the overzicht page
        return view('allergie.overzicht_gezinnen', [
            'gezinList' => $gezinList,
            'allergieList' => $allergieList,
            'selectedAllergieId' => $selectedAllergieId
        ]);
    }

    // Function to display a person's details and allergy details from the selected family using the $gezinId
    public function overzicht_gezinsallergieen($gezinId)
    {
        // Find the first value with the $gezinId
        $gezin = Gezin::findOrFail($gezinId);

        // Retrieve from database all persoon details by using the $gezinId
        $personen = Persoon::where('gezinId', $gezinId)->with('allergiePerPersoon.allergie')->get();

        // Return the user to the index display page with the 2 variables
        return view('allergie.overzicht_gezinsallergieen', [
            'gezin' => $gezin,
            'personen' => $personen,
        ]);
    }

    // Function to allow the editing of an allergie of the selected person
    public function wijzigen_allergie($persoonId)
    {
        // Find first person with id $personId and retrieve data
        $persoon = Persoon::findOrFail($persoonId);

        // Retrieve all allergie data from database
        $allergieList = Allergie::all();

        // Check if the person has an allergy with anafylactischRisico set to 'Hoog'
        $hasHighRiskAllergy = $persoon->allergiePerPersoon->contains(function ($allergiePerPersoon) {
            return $allergiePerPersoon->allergie->anafylactischRisico === 'Hoog';
        });

        /* If person has an allergy with the anafylactischRisico field in allergie table set to 'Hoog', fill $errorMessage with a message.
            If person does not have an allergy with the anafylactischRisico field in allergie table set to 'Hoog', leave the variable empty
        */
        $anafylactischMessage = $hasHighRiskAllergy ? 'Voor het wijzigen van deze allergie wordt geadviseerd eerst een arts te raadplegen vanwege een hoog risico op een anafylactische shock' : null;

        // Return the user to the wijzigen_allergie page with variables
        return view('allergie.wijzigen_allergie', [
            'persoon' => $persoon,
            'allergieList' => $allergieList,
            'anafylactischMessage' => $anafylactischMessage
        ]);
    }

    // Function to update the allergie of the selected person after the submit form request
    public function update_allergie(Request $request, $persoonId)
    {
        // Retrieve the allergie ID from the form dropdown
        $allergieId = $request->input('allergie_id');

        // Update or create the allergiePerPersoon entry
        DB::table('allergiePerPersoon')->updateOrInsert(
            ['persoonId' => $persoonId],
            ['allergieId' => $allergieId, 'isActief' => true]
        );

        // Return the user to the wijzig allergie page with a success message
        return redirect()->back()->with('success', 'De wijziging is doorgevoerd');
    }
}
