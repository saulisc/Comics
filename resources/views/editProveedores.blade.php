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
        <h1 class="display-4 text-center mt-5 mb-5"> Editar proveedores </h1>
        <div class="card text-center mb-5">
            <div class="display-7 card-header">
                Editar proveedor
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('proveedores.updateProveedores', $consultaIdProveedor->idProveedor) }}">
                    @csrf
                    {!! method_field('PUT') !!}
                    <div class="mb-3">
                        <label class="display-8 form-label">Empresa: </label>
                        <input type="text" class="form-control" name="txtEmpresaProv"
                            value="{{ $consultaIdProveedor->empresa }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtEmpresaProv') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="display-8 form-label">Dirección: </label>
                        <input type="text" class="form-control" name="txtDireccionProv"
                            value="{{ $consultaIdProveedor->direccion }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtDireccionProv') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="display-8 form-label">Pais: </label>
                        <input type="text" class="form-control" name="txtPaisProv"
                            value="{{ $consultaIdProveedor->pais }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtPaisProv') }} </p>
                    </div>


                    <div class="mb-3">
                        <label class="display-8 form-label">Contacto: </label>
                        <input type="text" class="form-control" name="txtContactoProv"
                            value="{{ $consultaIdProveedor->contacto }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtContactoProv') }} </p>
                    </div>


                    <div class="mb-3">
                        <label class="display-8 form-label">Número fijo: </label>
                        <input type="text" class="form-control" name="txtNoFijoProv"
                            value="{{ $consultaIdProveedor->noFijo }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtNoFijoProv') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="display-8 form-label">Número celular: </label>
                        <input type="text" class="form-control" name="txtNoCelProv"
                            value="{{ $consultaIdProveedor->noCelular }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtNoCelProv') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="display-8 form-label">Correo: </label>
                        <input type="text" class="form-control" name="txtCorreoProv"
                            value="{{ $consultaIdProveedor->correo }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtCorreoProv') }} </p>
                    </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning" onclick="return confirmacion()">Guardar cambios</button>
                <a href="{{ route('proveedores.indexProveedores', $consultaIdProveedor->idProveedor) }}"
                    class="btn btn-success m-1">Regresar</a>
                </form>
            </div>
        </div>
    </div>
@stop
