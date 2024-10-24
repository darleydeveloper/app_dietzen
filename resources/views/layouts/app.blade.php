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
        {{-- Título Cabecera --}}
        <div class="bg-green-100 my-4 text-center">
            <div class="typing"><span>@yield('cabecera')</span></div>
        </div>
        {{-- Mensajes informativos --}}
        @if (session('info'))
            <div class="flex justify-end m-4">
                <div class="alert alert-info w-96">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>{{session('info')}}</span>
                </div>
            </div>
        @endif
        {{-- Contenido --}}
        @yield('contenido')
    </main>
    <footer>
        <!--@include('layouts.footer')-->
    </footer>
</body>
</html>