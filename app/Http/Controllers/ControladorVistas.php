<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRequestFormCom;
use App\Http\Requests\validadorRequestFormProd;
use App\Http\Requests\validadorRequestProcFormProve;
use App\Http\Requests\validadorRequestProcLogin;

class ControladorVistas extends Controller
{
    
    public function procesarFormularioComics(validadorRequestFormCom $request){
       # $titulo = $request->input('txtTitulo');
        return redirect() -> route('almacenComics') -> with('Guardado', 'ok');
        
    }

    public function procesarLogIn(validadorRequestProcLogin $request){
        # $titulo = $request->input('txtTitulo');
         //el success cuenta mucho a la hora de regresar ese return 
         #return redirect() -> route('registro') -> with('success', compact('titulo'));
         return view('logout');
         //return view('registro', compact('titulo'));
     }

    public function procesarFormularioProductos(validadorRequestFormProd $request){
        # $titulo = $request->input('txtTitulo');
         //el success cuenta mucho a la hora de regresar ese return 
         return redirect() -> route('almacenProductos') -> with('success', 'ok');
         #return view('almacenProductos');
         //return view('registro', compact('titulo'));
     }

     public function procesarFormularioProveedores(validadorRequestProcFormProve $request){
        # $titulo = $request->input('txtTitulo');
         //el success cuenta mucho a la hora de regresar ese return 
         return redirect() -> route('registroProveedores') -> with('success', 'ok');
         //return view('registro', compact('titulo'));
     }





    public function registroProveedores(){
        return view('registroProveedores');
    }

    public function logout(){
        return view('logout');
    }

    public function login(){
        return view('login');
    }

    public function levantarPedido(){
        return view('levantarPedido');
    }

    public function inventario(){
        return view('inventario');
    }

    public function almacenProductos(){
        return view('almacenProductos');
    }

    public function almacenComics(){
        return view('almacenComics');
    }

    public function home(){
        return view('home');
    }
}
