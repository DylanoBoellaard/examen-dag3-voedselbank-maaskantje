<?php

use App\Http\Controllers\VoedselpakketOverzichtController;
use App\Http\Controllers\leverancierController;
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
});

Route::get('/overzicht', [VoedselpakketOverzichtController::class, 'index']);
Route::get('/gezin/{id}', [VoedselpakketOverzichtController::class, 'show']);
Route::get('/gezin/{id}/edit', [VoedselpakketOverzichtController::class, 'edit']);
Route::put('/gezin/{id}', [VoedselpakketOverzichtController::class, 'update']);
Route::get('/voedselbank-maaskanje.org', [Feature01::class, 'Home']);

Route::get('/klanten/overzicht', [Feature01::class, 'Overzicht'])->name('klanten.overzicht');
Route::get('/klanten/klantdetails/{persoonId}', [Feature02::class, 'Klant'])->name('klantdetails');
Route::get('/klanten/wijzigklant', [Feature02::class, 'Wijzig'])->name('klantwijzig');
Route::put('/klanten/wijzigklant', [Feature02::class, 'Wijzig'])->name('klantwijzig');

Route::get('/leverancier', [leverancierController::class, 'homepage'])->name('leverancier.homepage');
Route::get('/leverancier', [leverancierController::class, 'overzicht_leverancier'])->name('leverancier.overzicht_leverancier');
Route::get('/leverancier/overzichtProduct/{id}', [leverancierController::class, 'overzicht_producten'])->name('leverancier.overzicht_producten');
Route::get('/leverancier/wijzigen/{id}', [leverancierController::class, 'wijzigen'])->name('leverancier.wijzigen');
Route::post('/leverancier/update/{id}', [leverancierController::class, 'update'])->name('leverancier.update');
