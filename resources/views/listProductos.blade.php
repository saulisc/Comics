@extends('template')

@section('contenido')

    @if (session()->has('Actualizado'))
        {!! "<script> Swal.fire(
                  'Correcto!',
                  'Tu producto se actualizo correctamente!',
                  'success'
                )</script> " !!}
    @endif

    @if (session()->has('Eliminado'))
        {!! "<script> Swal.fire(
                  'Correcto!',
                  'Tu producto se elimino correctamente!',
                  'success'
                )</script> " !!}
    @endif

    @foreach ($resultProducto as $consulta)
        <div class="container col-md-6">

            <div class="card text-center mt-5 mb-5">
                <div class="display-7 card-header">
                    {{ $consulta->created_at }}
                </div>

                <div class="card-body">
                    <p>Tipo: {{ $consulta->tipo }}</p>
                    <p>Marca: {{ $consulta->marca }}</p>
                    <p>Descripcion: {{ $consulta->descripcion }}</p>
                    <p>Cantidad: {{ $consulta->cantidad }}</p>
                    <p>Precio Compra: {{ $consulta->precioCompra }}</p>
                    <p>Precio venta: {{ $consulta->precioVenta }}</p>

                </div>

                <div class="card-footer">
                    <a href="{{ route('productos.editProductos', $consulta->idProducto) }}" class="btn btn-warning m-1">Actualizar</a>
                    <a href="{{route('productos.deleteProductos', $consulta -> idProducto)}}" class="btn btn-danger m-1">Eliminar</a>

                </div>
            </div>
        </div>
    @endforeach
@stop
