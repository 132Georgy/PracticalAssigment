
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: Категория Бытовая техника</title>

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
            <a class="navbar-brand" href="http://internet-shop.tmweb.ru">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="http://internet-shop.tmweb.ru">Все товары</a></li>
                <li class="active"><a href="http://internet-shop.tmweb.ru/categories">Категории</a>
                </li>
                <li ><a href="http://internet-shop.tmweb.ru/basket">В корзину</a></li>
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
    <div class="starter-template">
                            <h1>
                              {{$carmodel->name}}
                            </h1>
    <p>
        {{$carmodel->description}}
    </p>
    <div class="row">
                    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">


                    </div>
        <img src="http://internet-shop.tmweb.ru/storage/products/delongi.jpg" alt="Кофемашина DeLongi">
        <div class="caption">
            <h3>Кофемашина DeLongi</h3>
            <p>25200 ₽</p>
            <p>
            <form action="http://internet-shop.tmweb.ru/basket/add/8" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="http://internet-shop.tmweb.ru/appliances/delongi"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="g89Nhtr6Kx4IVfB2vyORDbxfn2zAdAcQrvBk8gbj">            </form>
            </p>
        </div>
    </div>
</div>
                    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">


                    </div>
        <img src="http://internet-shop.tmweb.ru/storage/products/haier.jpg" alt="Холодильник Haier">
        <div class="caption">
            <h3>Холодильник Haier</h3>
            <p>40200 ₽</p>
            <p>
            <form action="http://internet-shop.tmweb.ru/basket/add/9" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="http://internet-shop.tmweb.ru/appliances/haier"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="g89Nhtr6Kx4IVfB2vyORDbxfn2zAdAcQrvBk8gbj">            </form>
            </p>
        </div>
    </div>
</div>
                    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">


                    </div>
        <img src="http://internet-shop.tmweb.ru/storage/products/moulinex.jpg" alt="Блендер Moulinex">
        <div class="caption">
            <h3>Блендер Moulinex</h3>
            <p>4200 ₽</p>
            <p>
            <form action="http://internet-shop.tmweb.ru/basket/add/10" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="http://internet-shop.tmweb.ru/appliances/moulinex"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="g89Nhtr6Kx4IVfB2vyORDbxfn2zAdAcQrvBk8gbj">            </form>
            </p>
        </div>
    </div>
</div>
                    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">


                    </div>
        <img src="http://internet-shop.tmweb.ru/storage/products/bosch.jpg" alt="Мясорубка Bosch">
        <div class="caption">
            <h3>Мясорубка Bosch</h3>
            <p>9200 ₽</p>
            <p>
            <form action="http://internet-shop.tmweb.ru/basket/add/11" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="http://internet-shop.tmweb.ru/appliances/bosch"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="g89Nhtr6Kx4IVfB2vyORDbxfn2zAdAcQrvBk8gbj">            </form>
            </p>
        </div>
    </div>
</div>
            </div>
    </div>
</div>
</body>
</html>
