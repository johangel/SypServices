<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css')}}">
</head>
<svg width="200px" id="loader"  height="200px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-cube hidden" style="z-index: 1000; position: absolute; top:50%; left: 50%; transform: translate(-50%,-50%); background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;">
  <g transform="translate(25,25)">
    <rect x="-20" y="-20" width="40" height="40" fill="#f3dcb2">
      <animateTransform attributeName="transform" type="scale" calcMode="spline" values="1.5;1" keyTimes="0;1" dur="1s" keySplines="0 0.5 0.5 1" begin="-0.3s" repeatCount="indefinite"></animateTransform>
    </rect>
  </g>
  <g transform="translate(75,25)">
    <rect x="-20" y="-20" width="40" height="40" fill="#cacbc5">
      <animateTransform attributeName="transform" type="scale" calcMode="spline" values="1.5;1" keyTimes="0;1" dur="1s" keySplines="0 0.5 0.5 1" begin="-0.2s" repeatCount="indefinite"></animateTransform>
    </rect>
  </g>
  <g transform="translate(25,75)">
    <rect x="-20" y="-20" width="40" height="40" fill="#a5a6a0">
      <animateTransform attributeName="transform" type="scale" calcMode="spline" values="1.5;1" keyTimes="0;1" dur="1s" keySplines="0 0.5 0.5 1" begin="0s" repeatCount="indefinite"></animateTransform>
    </rect>
  </g>
  <g transform="translate(75,75)">
    <rect x="-20" y="-20" width="40" height="40" fill="#d3e6ea">
      <animateTransform attributeName="transform" type="scale" calcMode="spline" values="1.5;1" keyTimes="0;1" dur="1s" keySplines="0 0.5 0.5 1" begin="-0.1s" repeatCount="indefinite"></animateTransform>
    </rect>
  </g>
</svg>
<body class="bg-white">
    <div class="bg-light" id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark nav-at-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Registro</a>
                            </li>
                        @else
                          <ul class="navbar-nav mr-auto">
                            <li class="">
                              <a class="nav-link" href="{{ url('/packages/register') }}">Registro paquetes</a>
                            </li>
                            <li class="">
                              <a class="nav-link" href="{{ url('/packages/details') }}">Informacion paquetes</a>
                            </li>
                            <li class="">
                              <a class="nav-link" href="{{ route('login') }}">administracion</a>
                            </li>
                          </ul>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Desconectar
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

        <main>
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>



</body>
</html>
