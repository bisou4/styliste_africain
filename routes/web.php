<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\MesureController;
use App\Http\Controllers\ModeleController;
use App\Http\Controllers\PaiementController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('gestion_client', ClientController::class);
Route::get('supprimer_client/{id}', [ClientController::class, 'destroy']);
Route::get('gestion_client.show', [ClientController::class, 'show']);


Route::resource('gestion_mesure', MesureController::class);
Route::get('supprimer_mesure/{id}', [MesureController::class, 'destroy']);


Route::resource('gestion_modele', ModeleController::class);
Route::get('supprimer_modele/{id}', [MesureController::class, 'destroy']);


Route::resource('gestion_paiement', PaiementController::class);
Route::get('supprimer_paiement/{id}', [PaiementController::class, 'destroy']);



