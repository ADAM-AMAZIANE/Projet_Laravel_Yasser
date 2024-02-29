<?php

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\RproductController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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

//Route::resource('produits', RproductController::class);

Route::get('/lang/{lang?}', function ($lang='en') {
    App::setLocale($lang);
    return view('home');
});



Route::get('/',[ProduitController::class,'home']);



Route::get('/produitsr/{cat}', [ProduitController::class,'getProdByCat']) ;






Route::get('/espaceclient', [ProduitController::class,'espaceclient'])->middleware('useruser');
Route::get('/catalogue', [ProduitController::class,'cataloguepdf'])->middleware('useruser');

Route::get('/hello', HelloWorldController::class);

/*************Routes Controller Resource************/
/**
** Route::get('/produits', 'RproductController@index')->name('index');    //    Appel : <a href="{{ route('name') }}">
** Route::get('/produits/create',[RproductController::class,'create'])->name('create');
** Route::post('/produits', [RproductController::class,'store'])->name('store');
** Route::get('/produits/{id}', [RproductController::class,'show'])->name('show');
** Route::get('/produits/{id}/edit', [RproductController::class,'edit'])->name('edit'); // Appel : route('edit', ['id' => $id]);
** Route::put('/produits/{id}', [RproductController::class,'update'])->name('update');
** Route::delete('/produits/{id}', [RproductController::class,'destroy'])->name('destroy');
**/


Route::get('/produits/create',[RproductController::class,'create'])->name('create');


Route::delete('/produits/{id}', [RproductController::class,'destroy'])->name('destroy');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/espaceadmin', [ProduitController::class,'espaceadmin'])->middleware('adminuser');





Route::middleware(['adminuser'])->group(function () {



    Route::get('/produits/{id}', [RproductController::class,'show'])->name('show');
    Route::get('/produits/{id}/edit', [RproductController::class,'edit'])->name('edit');
    Route::post('/produits', [RproductController::class,'store'])->name('store');
    Route::get('/produits/create', [RproductController::class,'create'])->name('create');    //    Appel : <a href="{{ route('name') }}">
    Route::put('/produits/{id}', [RproductController::class,'update'])->name('update');
    Route::delete('/produits/{id}', [RproductController::class,'destroy'])->name('destroy');


});




Route::get('cart', [RproductController::class,'cart']);

Route::get('cart/addc/{id}', [RproductController::class,'addToCart']);


Route::patch('update-cart', [RproductController::class,'updatec']);

Route::delete('remove-from-cart', [RproductController::class,'removec']);
