<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('titulo')</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <header>
        <h1>Artezzo</h1>

        <p>Fabrica de productos alimenticios semi artesanales</p>

        <button type="button" id="btn-tema" class="boton-modo">
            Cambio de modo
        </button>
    </header>

    <hr>

    <nav>
        <a href="/">inicio</a> |
        <a href="/productos">productos</a> |
        <a href="#">nosotros</a>
    </nav>

    <hr>

    <main>

        @yield('contenido')

    </main>

    <hr>

    <footer>
        <p>2026 Artezzo - Todos los derechos reservados</p>
        <p>La Paz - Bolivia</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>