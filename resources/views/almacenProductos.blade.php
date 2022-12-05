@extends('template')

@section('contenido')

    @if (session('Guardado'))
        <script>
            Swal.fire({
                title: 'Guardado',
                width: 600,
                padding: '3em',
                color: '#716add',
                background: '#fff url(/images/trees.png)',
                backdrop: `
      rgba(0,0,123,0.4)
      url("/images/nyan-cat.gif")
      left top
      no-repeat
    `
            })
        </script>
    @endif

    <script>
        function confirmacion() {
            var respuesta = confirm("¿Deseas enviar esta informacion?");
            if (respuesta == true) {
                return true;
            } else {
                return false;
            }
        }
    </script>

    <div class="container">
        <h1> Almacen Productos </h1>
        <a href="{{ route('productos.indexProductos') }}" class="btn btn-success m-1">Ver productos</a>
        <form method="POST" action="{{ route('productos.storeProductos') }}">
            @csrf
            <div class="mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tipo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtTipoProductos" value={{ old('txtTipoProductos') }}>
                    <p class="text-danger fst-italic"> {{ $errors->first('txtTipoProductos') }}</p>
                </div>

                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Marca</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtMarcaProductos"
                        value={{ old('txtMarcaProductos') }}>
                    <p class="text-danger fst-italic"> {{ $errors->first('txtMarcaProductos') }}</p>
                </div>

                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Descripción</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtDescripcionProductos"
                        value={{ old('txtDescripcionProductos') }}>
                    <p class="text-danger fst-italic"> {{ $errors->first('txtDescripcionProductos') }}</p>
                </div>

                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Cantidad</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtCantidadProductos"
                        value={{ old('txtCantidadProductos') }}>
                    <p class="text-danger fst-italic"> {{ $errors->first('txtCantidadProductos') }}</p>
                </div>

                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Precio Compra</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtPrecioCompraProductos"
                        value={{ old('txtPrecioCompraProductos') }}>
                    <p class="text-danger fst-italic"> {{ $errors->first('txtPrecioCompraProductos') }}</p>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" onclick="return confirmacion()">Guardar Producto</button>
        </form>
    </div>
    </div>

@stop
