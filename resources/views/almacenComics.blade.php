@extends('template')

@section('contenido')

@if (session('success'))
<script>
    Swal.fire({
        title: 'Todo correcto: Comic registrado',
        icon: 'success',
        confirmButtonText: 'Aceptar'
    })
</script>
@endif

    <div class="container">
        <h1> Almacen Comics </h1>
        <form method="POST" action="procesarFormularioComics">
            @csrf
            <div class="mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtNombreComics"  value={{old('txtNombreComics')}}>
                    <p class="text-danger fst-italic">  {{$errors->first('txtNombreComics')}}</p>

                </div>

                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Edición</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtEdicionComics"  value={{old('txtEdicionComics')}}>
                    <p class="text-danger fst-italic">  {{$errors->first('txtEdicionComics')}}</p>

                </div>

                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Compañía</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtCompañiaComics" value={{old('txtCompañiaComics')}}>
                    <p class="text-danger fst-italic">  {{$errors->first('txtCompañiaComics')}}</p>

                </div>

                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Cantidad</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtCantidadComics" value={{old('txtCantidadComics')}}>
                    <p class="text-danger fst-italic">  {{$errors->first('txtCantidadComics')}}</p>

                </div>

                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Precio Compra</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtPrecioCompraComics" value={{old('txtPrecioCompraComics')}}>
                    <p class="text-danger fst-italic">  {{$errors->first('txtPrecioCompraComics')}}</p>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar Comic</button>
        </form>
    </div>
    </div>

@stop
