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
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="d-flex flex-wrap px-2 py-2 col-lg-12">
                <div class="d-inline-flex flex-wrap collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Lado direito navbar -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-lg-12 justify-content-end">
                        <li class="nav-item px-3 py-2">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item px-3 py-2">
                            <a class="nav-link active" href="#">Quem somos</a>
                        </li>
                        <li class="nav-item px-3 py-2">
                            <a class="nav-link active" href="#">O serviço que oferecemos</a>
                        </li>
                        <!-- Links de autenticação -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item px-3 py-2">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item px-3 py-2">
                                    <a class="nav-link" href="{{ route('profile-selection') }}">{{ __('Registre-se') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="main-content">
            @yield('content')
        </main>
    </div>
</body>
</html>
