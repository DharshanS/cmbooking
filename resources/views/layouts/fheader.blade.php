<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/main.css">

    <link rel="stylesheet" href="dist/slick/slick-theme.css">
    <link rel="stylesheet" href="dist/slick/slick.css">
    <link rel="stylesheet" href="dist/css/bootstrap.css">

</head>
<body>
<div id="app">
    <div class="top-nav-section ">
        <div class="container top-nav-section-container">
            <div class="navbar-collapse">
                <ul class="nav">

                    <li class="nav-item">
                        <a class="nav-link" href="#">LOGIN|SIGNUP</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <div class="top-second-section ">

        <div class="container top-second-section-container">
            <img src="dist/img/logo/logo.png" class="mainLogo" alt="">
        </div>
    </div>
    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
