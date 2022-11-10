<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControladorVistas;

Route::get('/',[ControladorVistas::class,'home']) -> name('home');
Route::get('almacenComics',[ControladorVistas::class,'almacenComics']) -> name('almacenComics');
Route::get('almacenProductos',[ControladorVistas::class,'almacenProductos']) -> name('almacenProductos');
Route::get('inventario',[ControladorVistas::class,'inventario']) -> name('inventario');
Route::get('levantarPedido',[ControladorVistas::class,'levantarPedido']) -> name('levantarPedido');
Route::get('login',[ControladorVistas::class,'login']) -> name('login');
Route::get('logout',[ControladorVistas::class,'logout']) -> name('logout');
Route::get('registroProveedores',[ControladorVistas::class,'registroProveedores']) -> name('registroProveedores');

Route::post('procesarFormularioComics',[ControladorVistas::class,'procesarFormularioComics']) -> name('procesarFormularioComics');
Route::post('procesarFormularioProductos',[ControladorVistas::class,'procesarFormularioProductos']) -> name('procesarFormularioProductos');
Route::post('procesarLogIn',[ControladorVistas::class,'procesarLogIn']) -> name('procesarLogIn');
Route::post('procesarFormularioProveedores',[ControladorVistas::class,'procesarFormularioProveedores']) -> name('procesarFormularioProveedores');





