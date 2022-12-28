<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitsController;
use App\http\Controllers\CommandesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/produits', [ProduitsController::class, "liste"]);
Route::get('/produits/{id}', [ProduitsController::class, "detail"]);

//ajout produit
Route::post('/produits', [ProduitsController::class, "ajouter"]);
//ajout commande
Route::post('/commande', [ProduitsController::class, "ajouterCommande"]);

//route listecommande
Route::get('/listecommande/{id}',[CommandesController::class,"ListerLesCommandes"]);