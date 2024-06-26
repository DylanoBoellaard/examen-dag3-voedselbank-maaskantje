<?php

namespace App\Http\Controllers;

use App\Models\ProductPerMagazijn;
use Illuminate\Http\Request;

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
}
