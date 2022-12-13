@extends('template')

@section('contenido')

    <div class="container col-md-6">
        <table class="table">
            <h2>Comics</h2>

            <form class="d-flex" role="search">
                <input name="buscarpor" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <thead>
                <tr>
                    <!-- comics -->
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edicion</th>
                    <th scope="col">Compañia</th>
                    <th scope="col">Cantidad</th>
                    <!-- same of both -->
                    <th scope="col">Precio compra</th>
                    <th scope="col">Precio venta</th>
                    <th scope="col">Fecha ingreso</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resultComics as $value)
                    <tr>
                        <td><a>{{ $value->idComic }}</a></td>
                        <td><a>{{ $value->nombre }}</a></td>
                        <td><a>{{ $value->edicion }}</a></td>
                        <td><a>{{ $value->compania }}</a></td>
                        @if ($value->cantidad == 0)
                            <td>
                                <p class="text-danger bg-dark" >{{ $value->cantidad }}</a>
                            </td>
                        @endif
                        {{-- <td><a>{{ $value->cantidad }}</a></td> --}}
                        <td><a>{{ $value->precioCompra }}</a></td>
                        <td><a>{{ $value->precioVenta }}</a></td>
                        <td><a>{{ $value->created_at }}</a></td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    {{-- Articulos --}}
    <div class="container col-md-6">
        <table class="table">
            <h2>Articulos</h2>
            <thead>
                <tr>
                    <!-- articulos -->
                    <th scope="col">ID</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Cantidad</th>
                    <!-- same of both -->
                    <th scope="col">Precio compra</th>
                    <th scope="col">Precio venta</th>
                    <th scope="col">Fecha ingreso</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resultProductos as $item)
                    <tr>
                        <td><a>{{ $item->idProducto }}</a></td>
                        <td><a>{{ $item->tipo }}</a></td>
                        <td><a>{{ $item->marca }}</a></td>
                        <td><a>{{ $item->descripcion }}</a></td>
                        <td><a>{{ $item->cantidad }}</a></td>
                        <td><a>{{ $item->precioCompra }}</a></td>
                        <td><a>{{ $item->precioVenta }}</a></td>
                        <td><a>{{ $item->created_at }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



@stop
