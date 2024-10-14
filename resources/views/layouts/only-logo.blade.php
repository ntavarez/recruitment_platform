<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app container-fluid">
        <nav class="navbar navbar-expand-md navbar-light bg-white px-4 py-3">
            <div class="d-flex flex-wrap px-xl-2 py-xl-2 ms-xl-2 col-xl-12">
                <!-- Logotipo -->
                <a class="navbar-brand px-xl-5 py-xl-3 focus-ring" href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/quero1job.png') }}" alt="logotipo do quero1job">
                </a>
            </div>
        </nav>

        <main class="main-content">
            @yield('content')
        </main>
    </div>
</body>
</html>