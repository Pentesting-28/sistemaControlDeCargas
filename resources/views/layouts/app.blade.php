<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<style type="text/css">

#navegar,#loginnn,#registro{
    background: rgba(159,210,233,1);
    background: -moz-linear-gradient(left, rgba(159,210,233,1) 0%, rgba(28,181,227,1) 50%, rgba(169,215,234,1) 100%);
    background: -webkit-gradient(left top, right top, color-stop(0%, rgba(159,210,233,1)), color-stop(50%, rgba(28,181,227,1)), color-stop(100%, rgba(169,215,234,1)));
    background: -webkit-linear-gradient(left, rgba(159,210,233,1) 0%, rgba(28,181,227,1) 50%, rgba(169,215,234,1) 100%);
    background: -o-linear-gradient(left, rgba(159,210,233,1) 0%, rgba(28,181,227,1) 50%, rgba(169,215,234,1) 100%);
    background: -ms-linear-gradient(left, rgba(159,210,233,1) 0%, rgba(28,181,227,1) 50%, rgba(169,215,234,1) 100%);
    background: linear-gradient(to right, rgba(159,210,233,1) 0%, rgba(28,181,227,1) 50%, rgba(169,215,234,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9fd2e9', endColorstr='#a9d7ea', GradientType=1 );
}

</style>

    <div id="app">
        <nav id="navegar" class="sticky-top navbar navbar-expand-md navbar-light shadow-sm" style="background-color:#212529;">
            <div class="container">
                <a class="navbar-brand text-white">
                    Control de Cargas
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text text-white" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text text-white" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-5">
            @yield('content')
        </main>
    </div>
<style type="text/css">

footer {

  position: absolute;
  bottom: 0;
  width: 100%;

}

</style>

<footer>
    <div>
        <div class="container-fluid">
            <div class="shadow-lg p-0 mb-0 bg-white rounded">
            <center>

                <div class="p-1 mb-2  text-white" style="background-color:#ff6501c2;">
                        Cantv C.A - RIF:J-00124134-5. - Todos los derechos reservados - 2019©
                </div>

            </center>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
