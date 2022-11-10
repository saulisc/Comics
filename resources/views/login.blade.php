@extends('template')

@section('contenido')


    <div class="container">
        <h1> Log In </h1>
        
        <form method="POST" action="procesarLogIn">
            @csrf
            <div class="row mb-3">
                <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="txtLogInEmail"
                        placeholder="user@domain.com">
                        <p class="text-danger fst-italic">  {{$errors->first('txtLogInEmail')}}</p>

                </div>
                <div class="mb-3">
                    <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="txtLogInPass"
                        placeholder="Password">
                        <p class="text-danger fst-italic">  {{$errors->first('txtLogInPass')}}</p>

                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                        <label class="form-check-label" for="dropdownCheck">Remember me</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>        
        
    </div>
@stop
