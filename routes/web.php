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

// when the user clicks on the details link then they get send to this route
Route::get('/product_details/{voorraadId}', [VoorraadController::class, 'product_details'])->name('product_details');

// when the user clicks on the wijzig link then they get send to the editpage through this route
Route::get('/edit/{voorraadId}', [VoorraadController::class, 'edit'])->name('edit');

// when the user clicks on the wijzigen link on the edit page then they go through this route and his method to update the data 
Route::put('/update/{voorraadId}', [VoorraadController::class, 'update'])->name('update');
