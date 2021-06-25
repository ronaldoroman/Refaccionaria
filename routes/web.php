<?php

use App\Models\Producto;
use App\Models\Servicio;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $productos = Producto::all();
    $servicios = Servicio::all();

    return view('home',['productos'=>$productos, 'servicios'=> $servicios]);
});

/*
Route::get('/home', function () {
    return view('home');
}); */

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('/admin/servicios', App\Http\Controllers\ServicioController::class)->middleware('auth');

Route::resource('/admin/productos', App\Http\Controllers\ProductoController::class)->middleware('auth');
