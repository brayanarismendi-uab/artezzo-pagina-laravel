<?php

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
    return view('inicio');
});

Route::get('/productos', function () {
    return view('productos');
});


Route::post('/pedido', function () {

    $nombre = request('nombre');
    $correo = request('correo');
    $pedido = request('pedido');

    return view('pedido-recibido', [
        'nombre' => $nombre,
        'correo' => $correo,
        'pedido' => $pedido
    ]);
});