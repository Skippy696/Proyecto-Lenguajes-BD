<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- tailwind cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
    <link rel="stylesheet" href="app.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Qwitcher+Grypen&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/16042afcd5.js" crossorigin="anonymous"></script>
</head>
<header style="margin-bottom: 2%">
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #000000;">
        <a class="logo navbar-brand pl-4" href="{{ route('index') }}">Autos Fidelitas</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}" aria-current="page">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/nuevos') }}">Autos Nuevos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/usados') }}">Autos Usados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/rentar') }}">Alquiler Autos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/clients') }}">Clientes</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ url('/') }}" id="dropdownId"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">⏬</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="{{ route('contact') }}"> Contactanos </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

<body>
    <section>
        <div class="container">
            @yield('content')
        </div>
    </section>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>
<footer>
    <div class="footer bg-dark mt-5 p-5 text-center navbar-dark " style="color: white; background-color: #000000 ">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <h3 class="display-5">Autos Fidelitas</h3>
                    <p class="mt-3">Autos Fidelitas es una empresa dedicada a la venta de autos nuevos y usados,
                        alquiler de autos y
                        venta de repuestos.</p>
                </div>
                <div class="col-md-4">
                    <h3 class="display-5">Redes Sociales</h3>
                    <p> <i class="fa fa-facebook" aria-hidden="true"></i> Autos Fidelitas</p>
                    <p> <i class="fa fa-instagram" aria-hidden="true"></i> Autos Fidelitas</p>
                    <p> <i class="fa fa-twitter" aria-hidden="true"></i> Autos Fidelitas</p>
                </div>
                <div class="col-md-4">
                    <h3 class="display-5">Contactanos</h3>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> Telefono: 809-555-5555</p>
                    <p> <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Correo: autosfie@mao.com</p>
                </div>
            </div>
        </div>

</footer>

</html>
