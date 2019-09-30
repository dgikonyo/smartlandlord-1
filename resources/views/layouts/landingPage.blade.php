<!DOCTYPE html>
<html>
    <head>
        <title> Chady Enterprises</title>
        <meta charsey="utf-8">
        <link rel="stylesheet" type="text/css" href="chadyApplication.css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Chady Enterprises') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
                *
                {
                    margin:0;
                    padding:0;
                }
                .header
                {
                    height:100vh;
                }
                .navbar-style
                {
                    box-shadow: 0 5px 10px #efefef;
                    text-transform:uppercase;
                }
                .logo
                {
                    height:100px;
                    padding:2px 10px;
                }

        </style>
    </head>
    <body>
        <header class="header">
            <nav class="navbar navbar-style navbar-right">
                <div class="container">
                    <div class="navbar-header">
                        <a href="{{ url('/home') }}"><img class="logo"src="CHADY.png"alt="home"></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="">Home</a></li>
                        <li><a href="">Buidlings</a></li>
                        <li><a href="">Profit Report</a></li>
                    </ul>
                </div>
            </nav>
                @yield('content');
    </body>
</html>