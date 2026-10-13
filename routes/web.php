<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProductosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClientesController::class, 'index']);
Route::get('/empleados', [EmpleadosController::class, 'index']);
Route::get('/pedidos', [PedidosController::class, 'index']);
Route::get('/productos', [ProductosController::class, 'index']);


