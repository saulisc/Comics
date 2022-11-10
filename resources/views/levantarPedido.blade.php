<!-- no esta terminada esta vista -->

@extends('template')

@section('contenido')


<table class="table">
    <i class="bi bi-filter"></i>
    <thead>
      <tr>
        <!-- comics -->
        <th scope="col">#</th>
        <th scope="col">Proveedor</th>
        <th scope="col">Articulo</th>
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
        <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
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
    <button type="submit" class="btn btn-primary">Registrar nuevo</button>
  </table>


@stop