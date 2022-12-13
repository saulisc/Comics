@extends('template')

@section('contenido')
    <script src="js/jquery-1.9.1.min.js"></script>

    <div class="container col-md-6">
        <form method="POST" action="{{ route('pedidos.storePedido') }}">
            @csrf
            <table class="table">
                <h2>Levantar pedido Comics</h2>
                <div class="col-xl-12 text-right">
                    <a href="{{ route('download') }}" class="btn btn-success btn-sm">Export to PDF</a>
                </div>
                <thead>
                    <tr>

                        <!-- comics -->
                        <th scope="col">ID Proveedor</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Solicitar</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($result as $comic)
                    <form method="POST" action="{{ route('pedidos.storePedido') }}">
                        @csrf
                        <tr>
                            <td><a><input type="text" class="form-control" name="txtProveedorID"
                                        value={{ $comic->proveedor_id }}></a></td>
                            <td><a><input type="text" class="form-control" name="txtProveedor"
                                        value={{ $comic->empresa }}></a></td>
                            <td><a><input type="text" class="form-control" name="txtItem" value={{ $comic->nombre }}></a>
                            </td>
                            <td><input type="number" name="txtCantidad" min="0" max="100" value="0"></td>
                            <td><a> <button type="submit" class="btn btn-primary">Solicitar
                            </button>
                        </a></td>
                        </tr>
                    </form>
                    @endforeach

                </tbody>
            </table>



            <div class="container">
                <table class="table">
                    <h2>Levantar pedido Articulos</h2>

                    <thead>
                        <tr>

                            <!-- comics -->
                            <th scope="col">ID Proveedor</th>
                            <th scope="col">Proveedor</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Cantidad</th>

                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($result2 as $comic2)
                        <form method="POST" action="{{ route('pedidos.storePedido') }}">
                            @csrf
                            <tr>

                                {{-- <td><a>{{ $comic2->proveedor_id }}</a></td>
                                <td><a>{{ $comic2->empresa }}</a></td>
                                <td><a>{{ $comic2->tipo }}</a></td>
                                <td><input type="number" name="cantidad" id="cantidad" min="0" max="100"
                                        value="0"></td> --}}

                                <td><a><input type="text" class="form-control" name="txtProveedorID"
                                            value={{ $comic2->proveedor_id }}></a></td>
                                <td><a><input type="text" class="form-control" name="txtProveedor"
                                            value={{ $comic2->empresa }}></a></td>
                                <td><a><input type="text" class="form-control" name="txtItem"
                                            value={{ $comic2->tipo }}></a>
                                </td>
                                <td><input type="number" name="txtCantidad" min="0" max="100" value="0">
                                </td>
                                <td><a> <button type="submit" class="btn btn-primary">Solicitar
                                </button>
                            </a></td>
                            </tr>
                        </form>
                        @endforeach

                    </tbody>

                </table>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar pedido</button>

        </form>
    </div>

    </div>
@stop
