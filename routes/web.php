<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


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
    return ('Page Accueil');
});

// Route::get('/', function() { return 'Home page'; });
// Route::get('/product', function() { return 'Liste des produits'; });
// Route::get('/product/{id}', function($id) {return 'Fiche du produit '.$id;});
// Route::get('/cart', function() { return 'Panier'; });

Route::get('/', [HomeController::class, 'index']);

Route::get('/product', [ProductController::class, 'listeProduits']);

Route::get('/product/{id}', [ProductController::class, 'detailsProduit']);

Route::get('/cart', [CartController::class, 'cart']);
