<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Leverancier;
use App\Models\Product;
use App\Models\ContactPerLeverancier;
use App\Models\ProductPerLeverancier;
use Illuminate\Support\Facades\DB;

class leverancierController extends Controller
{
    //
    public function overzicht_leverancier(Request $request)
    {
        //request is filled with leveranciertype filled in by user in the form.
        $leveranciertype = $request->input('leveranciertype');

        // Start the query to get all leveranciers data from leverancier, contact and contactperleverancier 
        $query = DB::table('leverancier')
            ->join(
                'contactperleverancier',
                'leverancier.id',
                '=',
                'contactperleverancier.leverancierid'
            )
            ->join(
                'contact',
                'contact.id',
                '=',
                'contactperleverancier.contactid'
            );

        // Add the filter if it is set
        if (!empty($leveranciertype)) {
            $query->where('leverancier.leveranciertype', $leveranciertype);
        }

        // Execute the query
        $leveranciers = $query->get();

        // Get distinct leveranciertypes for the filter dropdown
        $leverancierTypes = DB::table('leverancier')
            ->select('leveranciertype')
            ->distinct()
            ->pluck('leveranciertype');

        return view('leverancier/overzicht', [
            'leveranciers' => $leveranciers,
            'leverancierTypes' => $leverancierTypes,
            'selectedType' => $leveranciertype
        ]);
    }
    public function overzicht_producten()
    {
        return view('leverancier/overzichtProduct');
    }
}
