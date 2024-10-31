<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo', 'Dietzen')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        @include('layouts.navigation')
    </header>
    <main>

        {{-- Botonera Tipo Prenda --}}
        <div class="tipoprenda">
        <button class="custom-btn btn-12"><span>@yield('invitacionPrenda')</span><span>@yield('tipoPrenda')</span></button>
        </div>
        
        {{-- Contenido --}}
        @yield('contenido')

    </main>
        {{-- Cinta promocional --}}
        <div class="bg-blue-100 my-4 text-center">
            <div class="typing"><span>@yield('infoPromocional')</span></div>
        </div>
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>