@extends('template')
@section('contenido')
    <!-- añadimos un condicional para que sirva como
            un notificador en caso de que se ejecute la condicion -->

    <script>
        function confirmacion() {
            var respuesta = confirm("¿Deseas eliminar esta informacion?");
            if (respuesta == true) {
                return true;
            } else {
                return false;
            }
        }
    </script>
    <div class="container col-md-6">
        <h1 class="display-4 text-center mt-5 mb-5"> Confirmar acción </h1>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>¿Seguro que deseas eliminar el siguiente comic?</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="card text-center mb-5">
            <div class="display-7 card-header">
                <label class="display-8 form-label"> {!! $consultaIdComic->created_at !!} </label>
            </div>
            <div class="card-body">
                @csrf
                {!! method_field('PUT') !!}
                <div class="mb-3">
                    <label class="display-8 form-label">Nombre: {!! $consultaIdComic->nombre !!} </label>
                </div>

                <div class="mb-3">
                    <label class="display-8 form-label">Edición: {!! $consultaIdComic->edicion !!} </label>
                </div>

                <div class="mb-3">
                    <label class="display-8 form-label">Compañia: {!! $consultaIdComic->compania !!} </label>
                </div>

                <div class="mb-3">
                    <label class="display-8 form-label">Cantidad: {!! $consultaIdComic->cantidad !!} </label>
                </div>

                <div class="mb-3">
                    <label class="display-8 form-label">Precio compra: {!! $consultaIdComic->precioCompra !!} </label>
                </div>

                <div class="mb-3">
                    <label class="display-8 form-label">Precio venta: {!! $consultaIdComic->precioVenta !!} </label>
                </div>
            </div>

            <div class="card-footer">
                <form action="{{ route('comics.destroyComics', $consultaIdComic->idComic) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirmacion()">Eliminar comic</button>
                    <a href="{{ route('comics.indexComics', $consultaIdComic->idComic) }}"
                        class="btn btn-success m-1">Regresar</a>
                </form>


            </div>
        </div>
    </div>
@stop
