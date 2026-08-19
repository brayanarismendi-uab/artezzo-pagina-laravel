<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo', 'Artezzo')</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
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
        @guest
            @if (Route::has('login'))
                | <a href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif
        @else
            | <span>{{ Auth::user()->name }}</span>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                @csrf
            </form>
        @endguest
    </nav>

    <hr>

    <main>
        @yield('content')
    </main>

    <hr>

    <footer>
        <p>2026 Artezzo - Todos los derechos reservados</p>
        <p>La Paz - Bolivia</p>
        
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
