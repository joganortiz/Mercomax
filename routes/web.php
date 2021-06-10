<?php

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\carritoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


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

// PRODUCTOS
Route::get('/', [HomeController::class, 'index'])->name('inicio');

Route::get('Productos/Frutas-y-verduras', [ProductosController::class, 'frutas'])->name('frutas');

Route::get('Productos/Abarrotes', [ProductosController::class, 'abarrotes'])->name('abarrotes');

Route::get('Productos/Lacteos-y-huevos', [ProductosController::class, 'lacteos'])->name('lacteos');

Route::get('Productos/Panaderia', [ProductosController::class, 'panaderia'])->name('panaderia');

Route::get('Productos/Carnes', [ProductosController::class, 'carnes'])->name('carnes');

Route::get('Productos/Bebidas', [ProductosController::class, 'bebidas'])->name('bebidas');

Route::get('Productos/Despensa', [ProductosController::class, 'despensa'])->name('despensa');

Route::get('Productos/Aseo-del-hogar', [ProductosController::class, 'hogar'])->name('hogar');

Route::get('Productos/Cuidado-personal', [ProductosController::class, 'personal'])->name('personal');

Route::get('Productos/Mascotas', [ProductosController::class, 'mascotas'])->name('mascotas');

Route::get('Productos/detalle/{productos}', [ProductosController::class, 'info'])->name('detail');

Route::get('/', [ProductosController::class, 'productos'])->name('inicio');

// CARERITODE COMPRAS
Route::put('/add', [CarritoController::class, 'add'])->name('cart.add');

Route::post('/update', [CarritoController::class, 'update'])->name('cart.update');
Route::post('/remove', [CarritoController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CarritoController::class, 'clear'])->name('cart.clear');

// USUARIOS
/* Route::get('Login', [UserController::class, 'login'])->name('login'); */
/* Route::get('Registrar', [UserController::class, 'rgistro'])->name('registrar'); */
Route::get('Rcuperar-contraseña', [UserController::class, 'password'])->name('password');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

