@extends('template')

@section('contenido')

    @if (session()->has('Actualizado'))
        {!! "<script> Swal.fire(
                  'Correcto!',
                  'Tu proovedor se actualizo correctamente!',
                  'success'
                )</script> " !!}
    @endif

    @if (session()->has('Eliminado'))
        {!! "<script> Swal.fire(
                  'Correcto!',
                  'Tu proovedor se elimino correctamente!',
                  'success'
                )</script> " !!}
    @endif

    @foreach ($resultProveedor as $consulta)
        <div class="container col-md-6">

            <div class="card text-center mt-5 mb-5">
                <div class="display-7 card-header">
                    {{ $consulta->created_at }}
                </div>

                <div class="card-body">
                    <p>Empresa: {{ $consulta->empresa }}</p>
                    <p>Dirección: {{ $consulta->direccion }}</p>
                    <p>Pais: {{ $consulta->pais }}</p>
                    <p>Contacto: {{ $consulta->contacto }}</p>
                    <p>Número fijo: {{ $consulta->noFijo }}</p>
                    <p>Número celular: {{ $consulta->noCelular }}</p>
                    <p>Correo: {{ $consulta->correo }}</p>

                </div>

                <div class="card-footer">
                    <a href="{{ route('proveedores.editProveedores', $consulta->idProveedor) }}" class="btn btn-warning m-1">Actualizar</a>
                    <a href="{{route('proveedores.deleteProveedores', $consulta -> idProveedor)}}" class="btn btn-danger m-1">Eliminar</a>

                </div>
            </div>
        </div>
    @endforeach
@stop
