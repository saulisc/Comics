<!doctype html>
<html lang="en">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <h5 class=" font-weight-bold">Pedido Realizado</h5>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th scope="col">ID Pedido</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Articulo</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->idPedido }}</td>
                    <td>{{ $pedido->proveedor  }}</td>
                    <td>{{ $pedido->item  }}</td>
                    <td>{{ $pedido->cantidad  }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
