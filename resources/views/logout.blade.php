@extends('template')

@section('contenido')


    <div class="card">
        <div class="card-body">
            Sesion Activa
        </div>
        <p class="card-text">
            <a href="{{ route('login') }}" class="stretched-link text-danger" style="position: relative;">Log out</a>
        </p>
    </div>

@stop
