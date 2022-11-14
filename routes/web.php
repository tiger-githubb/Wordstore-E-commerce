<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\ProduitController;

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

// Route::get('/', function () {
//     return view('pages.frontend.index');
// });

Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', 'App\Http\Controllers\Admin\FrontendController@index');

    Route::get('/categories', 'App\Http\Controllers\Admin\CategorieController@index');
    Route::get('/create-categorie', 'App\Http\Controllers\Admin\CategorieController@create');
    Route::post('/store-categorie', 'App\Http\Controllers\Admin\CategorieController@store');

    Route::get('/edit-categorie/{id}', [CategorieController::class, 'edit']);
    Route::put('/update-categorie/{id}', [CategorieController::class, 'update']);
    Route::get('/delete-categorie/{id}', [CategorieController::class, 'destroy']);


    Route::get('/produits', 'App\Http\Controllers\Admin\ProduitController@index');
    Route::get('/create-produit', 'App\Http\Controllers\Admin\ProduitController@create');
    Route::post('/store-produit', 'App\Http\Controllers\Admin\ProduitController@store');

    Route::get('/edit-produit/{id}', [ProduitController::class, 'edit']);
    Route::put('/update-produit/{id}', [ProduitController::class, 'update']);
    Route::get('/delete-produit/{id}', [ProduitController::class, 'destroy']);
});
