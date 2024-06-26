<?php

use App\Http\Controllers\AllergieController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Allergieën
// Route to display the families with allergies
Route::get('/voorraad/overzicht', [AllergieController::class, 'overzicht_gezinnen'])->name('allergie.overzicht_gezinnen');

// Route to handle the allergy form filter request for the families
Route::post('/voorraad/overzicht', [AllergieController::class, 'overzicht_gezinnen'])->name('allergie.filter_gezinnen');


// Allergieën per persoon
Route::get('/voorraad/overzicht/{gezinId}', [AllergieController::class, 'overzicht_gezinsallergieen'])->name('allergie.overzicht_gezinsallergieen');

// Route for editing allergy for selected person
Route::get('/voorraad/overzicht/wijzigen/{persoonId}', [AllergieController::class, 'wijzigen_allergie'])->name('allergie.wijzigen_allergie');

// Route to update allergy for the selected person after submit request
Route::post('/voorraad/overzicht/wijzigen/{persoonId}', [AllergieController::class, 'update_allergie'])->name('gezin.update_allergie');