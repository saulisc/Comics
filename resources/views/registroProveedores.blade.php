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
    <h1> Registro proveedores </h1>
    <a href="{{ route('proveedores.indexProveedores') }}" class="btn btn-success m-1">Ver proveedores</a>
    <form method="POST" action="{{ route('proveedores.storeProveedores') }}">
        @csrf
        <div class="mb-3">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Empresa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="txtEmpresaProv" value={{old('txtEmpresaProv')}}>
                <p class="text-danger fst-italic">  {{$errors->first('txtEmpresaProv')}}</p>

            </div>

            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Dirección</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="txtDireccionProv" value={{old('txtDireccionProv')}}>
                <p class="text-danger fst-italic">  {{$errors->first('txtDireccionProv')}}</p>

            </div>

            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">País</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="txtPaisProv" value={{old('txtPaisProv')}}>
                <p class="text-danger fst-italic">  {{$errors->first('txtPaisProv')}}</p>

            </div>

            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Contacto</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="txtContactoProv" value={{old('txtContactoProv')}}>
                <p class="text-danger fst-italic">  {{$errors->first('txtContactoProv')}}</p>

            </div>

            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">No Fijo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="txtNoFijoProv" value={{old('txtNoFijoProv')}}>
                <p class="text-danger fst-italic">  {{$errors->first('txtNoFijoProv')}}</p>

            </div>

            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">No Celular</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="txtNoCelProv" value={{old('txtNoCelProv')}}>
                <p class="text-danger fst-italic">  {{$errors->first('txtNoCelProv')}}</p>

            </div>

            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Correo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="txtCorreoProv" value={{old('txtCorreoProv')}}>
                <p class="text-danger fst-italic">  {{$errors->first('txtCorreoProv')}}</p>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary" onclick="return confirmacion()">Guardar proveedor</button>
    </form>
</div>
</div>




@stop
