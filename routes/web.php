<?php

use App\Http\Controllers\VoorraadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// when you go to the website then you land on this route and the homepage
Route::get('/', [VoorraadController::class, 'homepage'])->name('homepage');

// when the user clicks on the overzicht page link then they get send to the overzicht page through this route
Route::get('/overzicht', [VoorraadController::class, 'Overzicht_Voorraad'])->name('overzicht');

// when the user submits a form then they get send to the overzicht page with the data with the user inputs in the query
Route::post('/overzicht', [VoorraadController::class, 'Overzicht_Voorraad'])->name('overzicht');
