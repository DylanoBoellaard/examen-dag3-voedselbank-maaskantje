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
    // Function to show the homepage
    public function homepage()
    {
        return view('leverancier.homepage');
    }
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
            )
            ->select('leverancier.id as leverancierId', 'leverancier.*', 'contact.*'); // Explicitly select leverancier.id and alias it as leverancierId

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
    public function overzicht_producten($id)
    {
        // Get all products for the given leverancier
        $producten = ProductPerLeverancier::select(
            'leverancier.id as leverancier_id',
            'leverancier.naam as leverancier_naam',
            'leverancier.leveranciernummer',
            'leverancier.leveranciertype',
            'product.id as product_id',
            'product.Naam as product_naam',
            'product.SoortAllergie',
            'product.Barcode',
            'product.Houdbaarheidsdatum',
        )
            ->join('leverancier', 'productperleverancier.leverancierid', '=', 'leverancier.id') // Adjust the foreign key and table name as necessary
            ->join('Product', 'productperleverancier.productid', '=', 'product.id') // Adjust the foreign key and table name as necessary
            ->where('leverancier.id', $id)
            ->get();
        //dd($producten);
        return view('leverancier/overzichtProduct', [
            'producten' => $producten
        ]);
    }
    public function wijzigen($id)
    {
        $product = Product::findOrFail($id);
        return view('leverancier.wijzigen', [
            'product' => $product
        ]);
    }
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('leverancier.overzicht_producten', ['id' => $product->leverancierid]);
    }
}
