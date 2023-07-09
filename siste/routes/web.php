<?php
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
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
Route::resource('almacen/articulo', ArticuloController::class);
Route::resource('ventas/cliente', ClienteController::class);
Route::resource('compras/proveedor', ProveedorController::class);
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('almacen/categoria/{idcategoria}/edit', 'CategoriaController@edit')->name('almacen.categoria.edit');
Route::patch('almacen/categoria/{idcategoria}', 'CategoriaController@update')->name('almacen.categoria.update');
Route::delete('almacen/categoria/{idcategoria}', 'CategoriaController@destroy');


//Rutas del controlador Articulo
Route::get('/almacen/articulo/{idarticulo}/edit','ArticuloController@edit')->name('almacen.articulo.edit');
Route::patch('almacen/articulo/{idarticulo}','ArticuloController@update')->name('almacen.articulo.update');
Route::delete('almacen/articulo/{idarticulo}','ArticuloController@destroy');

//Rutas del controlador Persona
Route::get('/ventas/cliente/{idpersona}/edit','ClienteController@edit')->name('ventas.cliente.edit');
Route::patch('ventas/cliente/{idpersona}','ClienteController@update')->name('ventas.cliente.update');
Route::delete('ventas/cliente/{idpersona}','ClienteController@destroy');

//Rutas del controlador Proveedor
Route::get('/compras/proveedor/{idpersona}/edit','ProveedorController@edit')->name('ventas.cliente.edit');
Route::patch('/compras/proveedor/{idpersona}','ProveedorController@update')->name('ventas.cliente.update');
Route::delete('/compras/proveedor/{idpersona}','ProveedorController@destroy');

