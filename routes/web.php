<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and all of them
| will be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [PruebaController::class, 'home']);
Route::get('/mision', [PruebaController::class, 'mision']);
Route::get('/vision', [PruebaController::class, 'vision']);
Route::get('/quienes-somos', [PruebaController::class, 'quienesSomos']);

Route::get('/users', [UserController::class, 'index']);

Route::resource('productos', ProductoController::class);

Route::get('/proveedores', [ProveedorController::class, 'index']);
Route::get('/proveedores/create', [ProveedorController::class, 'create']);
Route::post('/proveedores', [ProveedorController::class, 'store']);
route::get('/proveedores/{id}/edit', [ProveedorController::class, 'edit']);Route::put('/proveedores/{id}', [ProveedorController::class, 'update']);
route::delete('/proveedores/{id}', [ProveedorController::class, 'destroy']);