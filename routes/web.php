<?php

use App\Http\Controllers\VoedselpakketOverzichtController;
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


Route::get('/overzicht', [VoedselpakketOverzichtController::class, 'index']);
Route::get('/gezin/{id}', [VoedselpakketOverzichtController::class, 'show']);
Route::get('/gezin/{id}/edit', [VoedselpakketOverzichtController::class, 'edit']);
Route::put('/gezin/{id}', [VoedselpakketOverzichtController::class, 'update']);

