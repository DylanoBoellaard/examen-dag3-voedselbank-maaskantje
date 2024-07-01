<?php

use App\Http\Controllers\VoedselpakketOverzichtController;
use App\Http\Controllers\leverancierController;
use App\Http\Controllers\VoorraadController;
use App\Http\Controllers\AllergieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Feature01;
use App\Http\Controllers\Feature02;
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
})->name('home');;

Route::get('/voedselpakket/overzicht', [VoedselpakketOverzichtController::class, 'index']);
Route::get('/voedselpakket/gezin/{id}', [VoedselpakketOverzichtController::class, 'show']);
Route::get('/voedselpakket/gezin/{id}/edit', [VoedselpakketOverzichtController::class, 'edit']);
Route::put('/voedselpakket/gezin/{id}', [VoedselpakketOverzichtController::class, 'update']);
Route::get('/voedselbank-maaskanje.org', [Feature01::class, 'Home']);

Route::get('/klanten/overzicht', [Feature01::class, 'Overzicht'])->name('klanten.overzicht');
Route::get('/klanten/klantdetails/{persoonId}', [Feature02::class, 'Klant'])->name('klantdetails');
Route::get('/klanten/wijzigklant', [Feature02::class, 'Wijzig'])->name('klantwijzig');
Route::put('/klanten/wijzigklant', [Feature02::class, 'Wijzig'])->name('klantwijzig');

Route::get('/leverancier', [leverancierController::class, 'overzicht_leverancier'])->name('leverancier.overzicht_leverancier');
Route::get('/leverancier/overzichtProduct/{id}', [leverancierController::class, 'overzicht_producten'])->name('leverancier.overzicht_producten');
Route::get('/leverancier/wijzigen/{id}', [leverancierController::class, 'wijzigen'])->name('leverancier.wijzigen');
Route::post('/leverancier/update/{id}', [leverancierController::class, 'update'])->name('leverancier.update');

// when the user clicks on the overzicht page link then they get send to the overzicht page through this route
Route::get('/voorraad/overzicht', [VoorraadController::class, 'Overzicht_Voorraad'])->name('overzicht');

// when the user submits a form then they get send to the overzicht page with the data with the user inputs in the query
Route::post('/voorraad/overzicht', [VoorraadController::class, 'Overzicht_Voorraad'])->name('overzicht');

// when the user clicks on the details link then they get send to this route
Route::get('/voorraad/product_details/{voorraadId}', [VoorraadController::class, 'product_details'])->name('product_details');

// when the user clicks on the wijzig link then they get send to the editpage through this route
Route::get('/voorraad/edit/{voorraadId}', [VoorraadController::class, 'edit'])->name('edit');

// when the user clicks on the wijzigen link on the edit page then they go through this route and his method to update the data 
Route::put('/voorraad/update/{voorraadId}', [VoorraadController::class, 'update'])->name('update');

// Allergieën
// Route to display the families with allergies
Route::get('/allergie/overzicht', [AllergieController::class, 'overzicht_gezinnen'])->name('allergie.overzicht_gezinnen');

// Route to handle the allergy form filter request for the families
Route::post('/allergie/overzicht', [AllergieController::class, 'overzicht_gezinnen'])->name('allergie.filter_gezinnen');

// Allergieën per persoon
Route::get('/allergie/overzicht/{gezinId}', [AllergieController::class, 'overzicht_gezinsallergieen'])->name('allergie.overzicht_gezinsallergieen');

// Route for editing allergy for selected person
Route::get('/allergie/overzicht/wijzigen/{persoonId}', [AllergieController::class, 'wijzigen_allergie'])->name('allergie.wijzigen_allergie');

// Route to update allergy for the selected person after submit request
Route::post('/allergie/overzicht/wijzigen/{persoonId}', [AllergieController::class, 'update_allergie'])->name('gezin.update_allergie');
