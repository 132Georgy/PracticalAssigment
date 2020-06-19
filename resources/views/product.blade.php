@extends('master')

@section('content')
    <div class="starter-template">
                            <h1>{{$product}}</h1>
    <p>Price: <b>xxx Eur</b></p>
    <img src="">
    <p>New car</p>

            <form action="" method="POST">
            <button type="submit" class="btn btn-success" role="button">Add to Cart</button>

            @csrf </form>
        </div>
@endsection
