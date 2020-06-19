<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Auto Paradise: @yield('title') </title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/template2.css" rel="stylesheet">
    <link href="/css/template1.css" rel="stylesheet">
</head>
<body style="background-color:#EDEAF3;">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('main') }}">Main Page</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('carmodels') }}">All cars</a></li>
                <li ><a href="/carmodels">Car models</a>
                </li>
                <li ><a href="{{ route('cart') }}">Cart</a></li>



            </ul>

            <ul class="nav navbar-nav navbar-right">
              @guest
                                    <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                    <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
              @endguest
              @auth
                                    <li><a href="{{route('home')}}">Administrator</a></li>
                                    <li><a href="{{route('get-logout')}}">Logout</a></li>

              @endauth
                            </ul>
        </div>
    </div>
</nav>

<div class="container">

    @yield('content')
</div>
</body>
</html>
