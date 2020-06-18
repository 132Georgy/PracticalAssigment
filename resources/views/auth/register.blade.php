
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Админка: Регистрация</title>

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/css/template1.css" rel="stylesheet">
    <link href="/css/template2.css" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="http://internet-shop.tmweb.ru">
                Вернуться на сайт
            </a>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                                    </ul>

                                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a class="nav-link" href="http://internet-shop.tmweb.ru/login">Войти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://internet-shop.tmweb.ru/register">Зарегистрироваться</a>
                        </li>
                    </ul>

                            </div>
        </div>
    </nav>

    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Регистрация</div>
            <form method="POST" action="{{route('register')}}" aria-label="Register">
              @csrf           
                     <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Имя</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name"
                               value="" required autofocus>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control"
                               name="email" value="" required>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control"
                               name="password" required>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Подтвердите
                        пароль</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Зарегистрироваться
                        </button>
                    </div>
                </div>
            </form>
            <div class="card-body">
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
