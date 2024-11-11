<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AutenticaController;

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
//Ruta '/' --> dietzen.test

Route::view('/','inicio')->name('inicio');

//Ruta para categorias
Route::resource('/categorias', CategoriaController::class)->except(['show']);

//Ruta para productos
Route::resource('/productos', ProductoController::class);

//Ruta de registro de usuarios
route::view('/registro', 'autenticacion.registro')->name('registro');
route::post('/registro', [AutenticaController::class, 'registro'])->name('registro.store');

//Ruta de login de usuarios
route::view('/login', 'autenticacion.login')->name('login');
route::post('/login', [AutenticaController::class, 'login'])->name('login.store');
//Ruta de logout de usuarios
route::post('/logout', [AutenticaController::class, 'logout'])->name('logout');

//Ruta para editar el perfil de usuario
Route::get('/perfil', [AutenticaController::class, 'perfil'])->name('perfil');
Route::put('/perfil/{user}', [AutenticaController::class, 'perfilUpdate'])->name('perfil.update');
//Ruta para cambiar la contraseña de usuario
Route::put('/perfil/password/{user}', [AutenticaController::class, 'passwordUpdate'])->name('password.update');

//Ruta para carrito de compras
//Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);//Para mostrar productos
//Route::post('cart/add', [App\Http\Controllers\CartController::class, 'add'])->name('add');//Para agregar productos
//Route::get('cart/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('checkout');//Para visualizar el carrito
//Route::get('cart/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('clear');//Para vaciar carrito de compra
//Route::post('cart/removeitem', [App\Http\Controllers\CartController::class, 'removeItem'])->name('removeitem');//Para envío de información al servidor


