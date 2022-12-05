@extends('template')
@section('contenido')


    <script>
        function confirmacion() {
            var respuesta = confirm("¿Deseas actualizar esta informacion?");
            if (respuesta == true) {
                return true;
            } else {
                return false;
            }
        }
    </script>
    <div class="container col-md-6">
        <h1 class="display-4 text-center mt-5 mb-5"> Editar productos </h1>
        <div class="card text-center mb-5">
            <div class="display-7 card-header">
                Editar producto
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('productos.updateProductos', $consultaIdProducto->idProducto) }}">
                    @csrf
                    {!! method_field('PUT') !!}
                    <div class="mb-3">
                        <label class="display-8 form-label">Tipo: </label>
                        <input type="text" class="form-control" name="txtTipoProductos"
                            value="{{ $consultaIdProducto->tipo }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtTipoProductos') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="display-8 form-label">Marca: </label>
                        <input type="text" class="form-control" name="txtMarcaProductos"
                            value="{{ $consultaIdProducto->marca }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtMarcaProductos') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="display-8 form-label">Descripcion: </label>
                        <input type="text" class="form-control" name="txtDescripcionProductos"
                            value="{{ $consultaIdProducto->descripcion }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtDescripcionProductos') }} </p>
                    </div>


                    <div class="mb-3">
                        <label class="display-8 form-label">Cantidad: </label>
                        <input type="text" class="form-control" name="txtCantidadProductos"
                            value="{{ $consultaIdProducto->cantidad }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtCantidadProductos') }} </p>
                    </div>


                    <div class="mb-3">
                        <label class="display-8 form-label">Precio compra: </label>
                        <input type="text" class="form-control" name="txtPrecioCompraProductos"
                            value="{{ $consultaIdProducto->precioCompra }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtPrecioCompraProductos') }} </p>
                    </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning" onclick="return confirmacion()">Guardar cambios</button>
                <a href="{{ route('productos.indexProductos', $consultaIdProducto->idProducto) }}"
                    class="btn btn-success m-1">Regresar</a>
                </form>
            </div>
        </div>
    </div>
@stop
