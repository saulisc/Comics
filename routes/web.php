<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\ControladorDB;

//usando ControladorBD

//create comics
Route::get('comics/createComics', [ControladorDB::class,'createComics']) -> name('comics.createComics');
//post on db for comics
Route::post('comics', [ControladorDB::class, 'storeComics']) -> name('comics.storeComics');

//list comics
Route::get('comics', [ControladorDB::class,'indexComics']) -> name('comics.indexComics');

//edit comics
Route::get('/comics/{id}/editComics', [ControladorDB::class,'editComics']) -> name('comics.editComics');
//update comics 
Route::put('comics/{id}', [ControladorDB::class,'updateComics']) -> name('comics.updateComics');

//get delete comics
Route::get('comics/{id}/deleteComics', [ControladorDB::class, 'deleteComics']) -> name('comics.deleteComics');
//delete book
Route::delete('comics/{id}', [ControladorDB::class, 'destroyComics']) -> name('comics.destroyComics');

//Rutas pasadas
Route::get('/',[ControladorVistas::class,'home']) -> name('home');
//Route::get('almacenComics',[ControladorVistas::class,'almacenComics']) -> name('almacenComics');
Route::get('almacenProductos',[ControladorVistas::class,'almacenProductos']) -> name('almacenProductos');
Route::get('inventario',[ControladorVistas::class,'inventario']) -> name('inventario');
Route::get('levantarPedido',[ControladorVistas::class,'levantarPedido']) -> name('levantarPedido');
Route::get('login',[ControladorVistas::class,'login']) -> name('login');
Route::get('logout',[ControladorVistas::class,'logout']) -> name('logout');
Route::get('registroProveedores',[ControladorVistas::class,'registroProveedores']) -> name('registroProveedores');

//Route::post('procesarFormularioComics',[ControladorVistas::class,'procesarFormularioComics']) -> name('procesarFormularioComics');
Route::post('procesarFormularioProductos',[ControladorVistas::class,'procesarFormularioProductos']) -> name('procesarFormularioProductos');
Route::post('procesarLogIn',[ControladorVistas::class,'procesarLogIn']) -> name('procesarLogIn');
Route::post('procesarFormularioProveedores',[ControladorVistas::class,'procesarFormularioProveedores']) -> name('procesarFormularioProveedores');





