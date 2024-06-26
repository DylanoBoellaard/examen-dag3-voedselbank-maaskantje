<?php

use App\Http\Controllers\leverancierController;
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
});

Route::get('/leverancier', [leverancierController::class, 'overzicht_leverancier'])->name('leverancier.overzicht_leverancier');

Route::get('/leverancier/overzichtProduct', [leverancierController::class, 'overzicht_producten'])->name('leverancier.overzicht_producten');
