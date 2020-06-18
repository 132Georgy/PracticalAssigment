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
<body>
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
                <li ><a href="{{ route('cart') }}">Add to cart</a></li>
                <li><a href="http://internet-shop.tmweb.ru/reset">Сбросить проект в начальное состояние</a></li>
                <li><a href="http://internet-shop.tmweb.ru/locale/en">en</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                                                    <li><a href="http://internet-shop.tmweb.ru/currency/RUB">₽</a></li>
                                                    <li><a href="http://internet-shop.tmweb.ru/currency/USD">$</a></li>
                                                    <li><a href="http://internet-shop.tmweb.ru/currency/EUR">€</a></li>
                                            </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                                    <li><a href="http://internet-shop.tmweb.ru/login">Войти</a></li>

                            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>
</body>
</html>
