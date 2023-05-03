<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('pedidos',[App\Http\Controllers\PedidoController::class,'index'])->name('pedidos.index');
Route::get('pedidos/crear',[App\Http\Controllers\PedidoController::class,'crear'])->name('pedidos.crear');

Route::post('pedidos/guardar',[App\Http\Controllers\PedidoController::class,'guardar'])->name('pedidos.guardar');
Route::get('pedidos/editar/{pedido}',[App\Http\Controllers\PedidoController::class,'editar'])->name('pedidos.editar');
Route::post('pedidos/actualizar',[App\Http\Controllers\PedidoController::class,'actualizar'])->name('pedidos.actualizar');
