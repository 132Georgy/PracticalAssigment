
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Confrim order</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="/css/template1.css" rel="stylesheet">
    <link href="/css/template2.css" rel="stylesheet">
</head>
<body>

</nav>

<div class="container">
    <div class="starter-template">
                            <h1>Confirm order:</h1>
    <div class="container">
        <div class="row justify-content-center">

            <form action="{{route('cart-confirm')}}" method="POST">
                <div>


                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Name: </label>
                            <div class="col-lg-4">
                                <input type="text" name="name" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Phone number: </label>
                            <div class="col-lg-4">
                                <input type="text" name="phone" id="phone" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                                                    <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Email: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="email" id="email" value="" class="form-control">
                                </div>
                            </div>
                                            </div>
                    <br>

                    <input type="hidden" name="_token" value="7IyB325ASHIHhJKGvqANCWsDvhQkOweIVjDJb807">
                      @csrf
                                   <input type="submit" class="btn btn-success" value="Confirm">
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
</body>
</html>
