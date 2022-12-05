<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\ControladorDB;

//usando ControladorBD

//ROUTES FOR COMICS

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


//ROUTES FOR PRODUCTS

//create products
Route::get('productos/createProductos', [ControladorDB::class,'createProductos']) -> name('productos.createProductos');
//post on db for products
Route::post('productos', [ControladorDB::class, 'storeProductos']) -> name('productos.storeProductos');

//list productos
Route::get('productos', [ControladorDB::class,'indexProductos']) -> name('productos.indexProductos');

//edit productos
Route::get('/productos/{id}/editProductos', [ControladorDB::class,'editProductos']) -> name('productos.editProductos');
//update productos 
Route::put('productos/{id}', [ControladorDB::class,'updateProductos']) -> name('productos.updateProductos');

//get delete productos
Route::get('productos/{id}/deleteProductos', [ControladorDB::class, 'deleteProductos']) -> name('productos.deleteProductos');
//delete productos
Route::delete('productos/{id}', [ControladorDB::class, 'destroyProductos']) -> name('productos.destroyProductos');


//ROUTES FOR PROVEEDORES
//create proveedores
Route::get('proveedores/createProveedores', [ControladorDB::class,'createProveedores']) -> name('proveedores.createProveedores');
//post on db for proveedores
Route::post('proveedores', [ControladorDB::class, 'storeProveedores']) -> name('proveedores.storeProveedores');

//list proveedores
Route::get('proveedores', [ControladorDB::class,'indexProveedores']) -> name('proveedores.indexProveedores');

//edit proveedores
Route::get('/proveedores/{id}/editProveedores', [ControladorDB::class,'editProveedores']) -> name('proveedores.editProveedores');
//update proveedores 
Route::put('proveedores/{id}', [ControladorDB::class,'updateProveedores']) -> name('proveedores.updateProveedores');

//get delete proveedores
Route::get('proveedores/{id}/deleteProveedores', [ControladorDB::class, 'deleteProveedores']) -> name('proveedores.deleteProveedores');
//delete proveedores
Route::delete('proveedores/{id}', [ControladorDB::class, 'destroyProveedores']) -> name('proveedores.destroyProveedores');





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





