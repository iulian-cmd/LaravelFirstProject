<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProductModelController;
use App\Http\Controllers\UrlsController;


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
    $notes = Notes::all();
    return ('welcome')->with('notes', $notes);
});


// routes
// Route::get('/', function() { return 'Home page'; });
// Route::get('/product', function() { return 'Liste des products'; });
// Route::get('/product/{id}', function($id) {return 'Fiche du product '.$id;});
// Route::get('/cart', function() { return 'Panier'; });


// controllers
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/product', [ProductController::class, 'listProducts']);
// Route::get('/product/{id}', [ProductController::class, 'detailsProduct']);
// Route::get('/cart', [CartController::class, 'cart']);



// views
Route::get('/', [HomeController::class, 'index']);
// Route::get('/', [UrlsController::class, 'create']);
Route::get('/product', [ProductController::class, 'listProducts']);
Route::get('/product/{id}', [ProductController::class, 'detailsProduct'])->where('idProduct','[0-9]+');
Route::get('/cart', [CartController::class, 'cart']);
Route::get('/productmodel/nomPrix', [ProductModelController::class, 'nomPrix']);

Route::get('/productmodel/{idProduct}', [ProductModelController::class, 'getByIdProduct'])->where('idProduct','[0-9]+');

Route::get('/productmodel/nomProduct', [ProductModelController::class, 'getByNameProduct']);

Route::get('/productmodel/prixProduct', [ProductModelController::class, 'getByPriceProduct']);
// Route::get("/notes",function(){$notes = Notes::all();});