<?php

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

Route::get('/voedselbank-maaskanje.org', [Feature01::class, 'Home']);
Route::get('/klanten/overzicht', [Feature01::class, 'Overzicht'])->name('klanten.overzicht');

Route::get('/klanten/klantdetails/{persoonId}', [Feature02::class, 'Klant'])->name('klantdetails');
Route::get('/klanten/wijzigklant', [Feature02::class, 'Wijzig'])->name('klantwijzig');
