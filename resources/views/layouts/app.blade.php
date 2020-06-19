<!doctype html>
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
    <style>
        .navbar{
            background-color: #191919;
        }

        .navbar .container .nav-item{
            color: white;
            font-size: 20px;
            letter-spacing: 3px;
            font-family:  "Libre Franklin", Arial, sans-serif;
        }

        .navbar .container .nav-item:hover{
            color:  #e32879;
        }

        .container .navbar-brand{
            color:  #e32879;
            font-size: 20px;
            letter-spacing: 4px;
            font-family:  "Libre Franklin", Arial, sans-serif;
        }

        /* content */

        .hero-section{
            height: 800px;
            background-image: url(img/hero-bg.jpg);
            display: flex;
            align-items: center;
            -webkit-box-align: center;
        }

        .set-bg{ 
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top center;
        }

        .hs-text span {
            color: #e32879;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .hs-text h2 {
            color: #ffffff;
            font-size: 60px;
            font-weight: 700;
            margin-top: 30px;
            margin-bottom: 10px;
        }

        .hs-text p {
            color: #ffffff;
            margin-bottom: 45px;
        }

        p {
            font-size: 16px;
            font-family: "Libre Franklin", sans-serif;
            color: #b3b3b3;
            font-weight: 400;
            line-height: 26px;
            margin: 0 0 15px 0;
        }

        .primary-btn {
            font-size: 16px;
            color: #ffffff;
            background: #e32879;
            display: inline-block;
            font-weight: 700;
            padding: 12px 30px 10px;
        }

        .hs-text a:hover {
            text-decoration: none;
            color: rgb(0, 14, 94);
        }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <div class="container d-flex justify-content-end">
                            <a class="navbar-brand" href="{{ route('product.index') }}">Home</a>
                            <a class="nav-item nav-link" href="{{ route('product.index') }}">About Us</a>
                            <a class="nav-item nav-link" href="{{ route('product.index') }}">Blog</a>
                            <a class="nav-item nav-link" href="{{ route('product.index') }}">Gallery</a>
                            <a class="nav-item nav-link" href="{{ route('product.index') }}">Contact</a>
                        </div>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
