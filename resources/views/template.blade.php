<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Weirdo Comics </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- sweetAlert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <nav class="navbar" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">Home</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log In</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('almacenComics') }}">Almacen Comics</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('almacenProductos') }}">Almacen Productos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('inventario') }}">Inventario</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('levantarPedido') }}">Levantar Pedido</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('registroProveedores') }}">Registro Proveedores</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>



    <!-- CONTENIDO DE LA PAGINA -->
    @yield('contenido')


    <div class="card-footer text-bg-primary mb-3">
        Weirdo Comics | All rights reserved | {{ $fechaActual_2 = date('D - F - Y') }}

    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
