@extends('template')

@section('contenido')

@if (session('success'))
<script>
    Swal.fire({
        title: 'Todo correcto: Producto registrado',
        icon: 'success',
        confirmButtonText: 'Aceptar'
    })
</script>
@endif

    <div class="container">
        <h1> Almacen Productos </h1>
        <form method="POST" action="procesarFormularioProductos">
            @csrf
            <div class="mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tipo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtTipoProductos" value={{old('txtTipoProductos')}}>
                    <p class="text-danger fst-italic">  {{$errors->first('txtTipoProductos')}}</p>
                </div>

                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Marca</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtMarcaProductos" value={{old('txtMarcaProductos')}}>
                    <p class="text-danger fst-italic">  {{$errors->first('txtMarcaProductos')}}</p>
                </div>

                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Descripción</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtDescripcionProductos" value={{old('txtDescripcionProductos')}}>
                    <p class="text-danger fst-italic">  {{$errors->first('txtDescripcionProductos')}}</p>
                </div>

                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Cantidad</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtCantidadProductos" value={{old('txtCantidadProductos')}}>
                    <p class="text-danger fst-italic">  {{$errors->first('txtCantidadProductos')}}</p>
                </div>

                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Precio Compra</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtPrecioCompraProductos" value={{old('txtPrecioCompraProductos')}}>
                    <p class="text-danger fst-italic">  {{$errors->first('txtPrecioCompraProductos')}}</p>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar Comic</button>
        </form>
    </div>
    </div>

@stop
