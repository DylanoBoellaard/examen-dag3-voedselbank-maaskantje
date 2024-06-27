<?php

namespace App\Http\Controllers;

use App\Models\ProductPerMagazijn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoorraadController extends Controller
{
    // this methods send the user to the homepage
    public function homepage()
    {
        return view('homepage');
    }

    // this function sends the user to the overzicht voorraad page
    // when the user fill the form and submits the form the this method will catch it
    // and shows the data based on the users input
    public function Overzicht_Voorraad(Request $request)
    {
        // checks if the request is not empty except when there is a categorie in the request
        // otherwise it goes to the else
        if (!empty($request->except('categorie'))) {
            // this gets the data with the user inputs
            $data = ProductPerMagazijn::select('ProductPerMagazijn.id', 'ProductPerMagazijn.ProductId', 'ProductPerMagazijn.MagazijnId', 'Product.Naam as Product_naam', 'Product.CategorieId', 'Product.Houdbaarheidsdatum', 'Magazijn.VerpakkingsEenheid', 'Magazijn.Aantal', 'Categorie.Naam as Categorie_naam')->join('Magazijn', 'ProductPerMagazijn.MagazijnId', 'Magazijn.Id')->join('Product', 'ProductPerMagazijn.ProductId', 'Product.Id')->join('Categorie', 'Product.CategorieId', 'Categorie.Id')->where('Categorie.Naam', $request->categorie)->get();

            // this sends the user to the overzicht page with data
            return view('voorraad.overzicht', compact('data'));
        } else {
            // just only gets the data from the database without user input
            $data = ProductPerMagazijn::select('ProductPerMagazijn.id', 'ProductPerMagazijn.ProductId', 'ProductPerMagazijn.MagazijnId', 'Product.Naam as Product_naam', 'Product.CategorieId', 'Product.Houdbaarheidsdatum', 'Magazijn.VerpakkingsEenheid', 'Magazijn.Aantal', 'Categorie.Naam as Categorie_naam')->join('Magazijn', 'ProductPerMagazijn.MagazijnId', 'Magazijn.Id')->join('Product', 'ProductPerMagazijn.ProductId', 'Product.Id')->join('Categorie', 'Product.CategorieId', 'Categorie.Id')->get();

            // sends the user with the data to the overzicht page
            return view('voorraad.overzicht', compact('data'));
        }
    }

    // sends the user to the product details page
    public function product_details($voorraadId)
    {
        try {
            $data = ProductPerMagazijn::select('ProductPerMagazijn.id', 'ProductPerMagazijn.Locatie', 'ProductPerMagazijn.ProductId', 'ProductPerMagazijn.MagazijnId', 'Product.Naam', 'Product.Houdbaarheidsdatum', 'Product.Barcode', 'Magazijn.Ontvangstdatum', 'Magazijn.Uitleveringsdatum', 'Magazijn.Aantal')->join('Magazijn', 'ProductPerMagazijn.MagazijnId', 'Magazijn.Id')->join('Product', 'ProductPerMagazijn.ProductId', 'Product.Id')->where('ProductPerMagazijn.ProductId', $voorraadId)->where('ProductPerMagazijn.MagazijnId', $voorraadId)->get();
        } catch (\Throwable $e) {
            return redirect(route('overzicht'));
        }
        return view('voorraad.product_details', compact('data'));
    }

    public function edit($voorraadId)
    {
        try {
            $data = ProductPerMagazijn::select('ProductPerMagazijn.id', 'ProductPerMagazijn.Locatie', 'ProductPerMagazijn.ProductId', 'ProductPerMagazijn.MagazijnId', 'Product.Naam', 'Product.Houdbaarheidsdatum', 'Product.Barcode', 'Magazijn.Ontvangstdatum', 'Magazijn.Uitleveringsdatum', 'Magazijn.Aantal')->join('Magazijn', 'ProductPerMagazijn.MagazijnId', 'Magazijn.Id')->join('Product', 'ProductPerMagazijn.ProductId', 'Product.Id')->where('ProductPerMagazijn.ProductId', $voorraadId)->where('ProductPerMagazijn.MagazijnId', $voorraadId)->get();
        } catch (\Throwable $e) {
            return redirect(route('overzicht'));
        }
        return view('voorraad.edit', compact('data'));
    }

    public function update(Request $request, $voorraadId)
    {
        if ($request->AantalUitgeleleverdeProducten > $request->Aantal) {
            return redirect(route('edit', [$voorraadId]))->with('error', 'De productgegevens kunnen niet worden gewijzigd')->with('error_message', 'Er worden meer producten uitgeleverd dan er in voorraad zijn');
        } else {
            $product = [
                'Naam' => $request->Naam,
                'Houdbaarheidsdatum' => date('Y-m-d', strtotime($request->Houdbaarheidsdatum)),
                'Barcode' => $request->Barcode
            ];

            $magazijn = [
                'Ontvangstdatum' => date('Y-m-d', strtotime($request->Ontvangstdatum)),
                'Uitleveringsdatum' => date('Y-m-d', strtotime($request->Uitleveringsdatum)),
                'Aantal' => $request->Aantal - $request->AantalUitgeleleverdeProducten
            ];

            $productpermagazijn = [
                'Locatie' => $request->Locatie
            ];

            DB::table('Magazijn')->where('id', $voorraadId)->update($magazijn);
            DB::table('Product')->where('id', $voorraadId)->update($product);
            DB::table('ProductPerMagazijn')->where('id', $voorraadId)->update($productpermagazijn);

            return redirect(route('edit', [$voorraadId]))->with('succes', 'De productgegevens zijn gewijzigd');
        }
    }
}
