@extends('template')

@section('contenido')

<table class="table">
    <i class="bi bi-filter"></i>
    <thead>
      <tr>
        <!-- comics -->
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Edicion</th>
        <th scope="col">Compañia</th>
        <th scope="col">Unidad de Medida</th>
        <th scope="col">Cantidad</th>
        <!-- same of both -->
        <th scope="col">Precio compra</th>
        <th scope="col">Precio venta</th>
        <th scope="col">Fecha ingreso</th>
        <th scope="col">Tipo producto</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Goku</td>
        <td>Latest</td>
        <td>Universal Co</td>
        <td>EXG</td>
        <td>50</td>
        <td>$.50</td>
        <td>$100</td>
        <td>10/10/10</td>
        <td>Tipo: 1</td>
      </tr>
      
      <tr>
        <th scope="row">1</th>
        <td>Vegeta</td>
        <td>5.00</td>
        <td>Universal Co</td>
        <td>EXG</td>
        <td>58</td>
        <td>$90</td>
        <td>$200</td>
        <td>12/10/10</td>
        <td>Tipo: 1</td>

      </tr>

    </tbody>
    <button type="button" class="btn btn-danger">Eliminar registro</button>
    <button type="submit" class="btn btn-primary">Registrar nuevo</button>
  </table>


  <!-- table 2 -->
  <table class="table">
    <thead>
      <tr>
        <!-- articulos -->
        <th scope="col">Tipo</th>
        <th scope="col">Marca</th>
        <th scope="col">Descripción</th>
        <th scope="col">Tipo producto</th>
        <!-- same of both -->
        <th scope="col">Cantidad</th>
        <th scope="col">Precio compra</th>
        <th scope="col">Precio venta</th>
        <th scope="col">Fecha ingreso</th>
        <th scope="col">Tipo producto</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Playera</td>
        <td>Mike</td>
        <td>Playera marca Mike...</td>
        <td>Vestimenta</td>
        <td>50</td>
        <td>$500</td>
        <td>$1000</td>
        <td>10/11/10</td>
        <td>Tipo: 1</td>

      </tr>
      
      <th scope="row">1</th>
      <td>T-shirt</td>
      <td>Pumba</td>
      <td>Playera marca Pumba...</td>
      <td>Vestimenta</td>
      <td>50</td>
      <td>$500</td>
      <td>$1000</td>
      <td>10/11/10</td>
      <td>Tipo: 1</td>

    </tr>

    </tbody>
  </table>



@stop
