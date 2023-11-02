<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\PublicofertController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use App\Models\Productos;
use App\Models\Proveedores;
use App\Models\Publicofert;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    $proveedores = Proveedores::all();
    $productos = Productos::all();
    $ofertas = Publicofert::all();
    return view('welcome')->with('proveedores', $proveedores)->with('productos', $productos)->with('ofertas', $ofertas);
});

Route::get('productos/{slug}', [StoreController::class, 'show'])
    ->name('product-details');

// Ruta para mostrar todas las categorías y productos
Route::get('/productos', [StoreController::class, 'index'])
    ->name('productos.index');

// Ruta para mostrar la página de contacto
Route::get('/contact', function () {
    return view('contact');
});

// Ruta para buscar productos por categoría por su slug
Route::get('categorias/{slug}', [StoreController::class, 'searchCategory'])
    ->name('searchCategory');

    Route::get('/nosotros', [ClientesController::class, 'clientes']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('usuarios', UserController::class);
Route::resource('clientes', ClientesController::class);
Route::resource('proveedores', ProveedoresController::class);
Route::resource('ofertas', PublicofertController::class);
Route::resource('categoria', CategoriasController::class);
Route::resource('producto', ProductosController::class);
Route::resource('Pedido', PedidoController::class);



