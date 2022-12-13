@extends('template')

@section('contenido')

    <div class="container col-md-6">
        <table class="table">

            <h2>Comics</h2>
            <div class="col-xl-12 text-right">
                <a href="{{ route('downloadCarrito') }}" class="btn btn-success btn-sm">Exportar a PDF</a>
            </div>
            {{-- 
            <form class="d-flex" role="search">
                <input name="buscarpor" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}

            <thead>
                <tr>
                    <!-- comics -->
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad</th>
                    <!-- same of both -->
                    <th scope="col">Precio venta</th>
                    <th scope="col">Agregar al carrito</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resultComics as $value)
                    <form method="POST" action="{{ route('ped.carritoUp') }}">
                        @csrf
                        <tr>
                            <td><a><input type="text" class="form-control" name="txtItem" value={{ $value->nombre }}></a>
                            </td>
                            <td><input type="number" name="txtCantidad" min="0" max={{ $value->cantidad }}
                                    value="0"></td>

                            <td><a><input type="text" class="form-control" name="txtPrecioVenta"
                                        value={{ $value->precioVenta }}></a></td>

                            <td><a> <button type="submit" class="btn btn-primary">Vender
                                    </button>
                                </a></td>
                        </tr>
                    </form>
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
                    <!-- comics -->
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad</th>
                    <!-- same of both -->
                    <th scope="col">Precio venta</th>
                    <th scope="col">Agregar al carrito</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resultProductos as $prod)
                    <form method="POST" action="{{ route('ped.carritoUp') }}">
                        @csrf
                        <tr>
                            <td><a><input type="text" class="form-control" name="txtItem" value={{ $prod->tipo }}></a>
                            </td>
                            <td><input type="number" name="txtCantidad" min="0" max={{ $prod->cantidad }}
                                    value="0"></td>

                            <td><a><input type="text" class="form-control" name="txtPrecioVenta"
                                        value={{ $prod->precioVenta }}></a></td>

                            <td><a> <button type="submit" class="btn btn-primary">Vender
                                    </button>
                                </a></td>
                        </tr>
                    </form>
                @endforeach
            </tbody>
        </table>
    </div>



@stop
