<?php
use App\Http\Controllers\CategoriaController;

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

Route::resource('almacen/categoria', CategoriaController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('almacen/categoria/{idcategoria}/edit', 'CategoriaController@edit')->name('almacen.categoria.edit');
Route::patch('almacen/categoria/{idcategoria}', 'CategoriaController@update')->name('almacen.categoria.update');


