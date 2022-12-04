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
        <h1 class="display-4 text-center mt-5 mb-5"> Editar comics </h1>
        <div class="card text-center mb-5">
            <div class="display-7 card-header">
                Editar comic
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('comics.updateComics', $consultaIdComic->idComic) }}">
                    @csrf
                    {!! method_field('PUT') !!}
                    <div class="mb-3">
                        <label class="display-8 form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombreComics"
                            value="{{ $consultaIdComic->nombre }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtNombreComics') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="display-8 form-label">Edición: </label>
                        <input type="text" class="form-control" name="txtEdicionComics"
                            value="{{ $consultaIdComic->edicion }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtEdicionComics') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="display-8 form-label">Compañia: </label>
                        <input type="text" class="form-control" name="txtCompañiaComics"
                            value="{{ $consultaIdComic->compania }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtCompañiaComics') }} </p>
                    </div>


                    <div class="mb-3">
                        <label class="display-8 form-label">Cantidad: </label>
                        <input type="text" class="form-control" name="txtCantidadComics"
                            value="{{ $consultaIdComic->cantidad }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtCantidadComics') }} </p>
                    </div>


                    <div class="mb-3">
                        <label class="display-8 form-label">Precio compra: </label>
                        <input type="text" class="form-control" name="txtPrecioCompraComics"
                            value="{{ $consultaIdComic->precioCompra }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtPrecioCompraComics') }} </p>
                    </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning" onclick="return confirmacion()">Guardar cambios</button>
                <a href="{{ route('comics.indexComics', $consultaIdComic->idComic) }}"
                    class="btn btn-success m-1">Regresar</a>
                </form>
            </div>
        </div>
    </div>
@stop
