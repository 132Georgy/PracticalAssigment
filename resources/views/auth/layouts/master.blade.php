
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin: @yield('title')</title>

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-expand-md navbar-light navbar-laravel">
        <div class="container">


            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                                    </ul>

                                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">Login</a>
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
            <div class="card-header">@yield('title')</div>
            <form method="POST" action="http://internet-shop.tmweb.ru/register" aria-label="Register">
                <input type="hidden" name="_token" value="2erHyRJNF8Gwxx1yDYUaCXfOXpW0LkSYUrILRuEC">                <div class="form-group row">
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
                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control"
                               name="password" required>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm password</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Register
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
