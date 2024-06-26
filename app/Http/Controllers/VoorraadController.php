<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoorraadController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function Overzicht_Voorraad()
    {
        return view('voorraad.overzicht');
    }
}
