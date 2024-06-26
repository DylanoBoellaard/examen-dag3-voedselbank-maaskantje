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
// Gezinsallergieën overzicht
Route::get('/voorraad/overzicht', [AllergieController::class, 'overzicht_gezinsallergieen'])->name('allergie.overzicht_gezinsallergieen');

// Route to handle the allergie form filter request for the families
Route::post('/voorraad/overzicht', [AllergieController::class, 'overzicht_gezinsallergieen'])->name('allergie.filter_gezinsallergieen');