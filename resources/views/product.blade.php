@extends('master')

@section('content')
    <div class="starter-template">
                            <h1>{{$product}}</h1>
    <p>Цена: <b>11980 ₽</b></p>
    <img src="http://internet-shop.tmweb.ru/storage/products/samsung_j6.jpg">
    <p>Современный телефон начального уровня</p>

            <form action="http://internet-shop.tmweb.ru/basket/add/12" method="POST">
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

            <input type="hidden" name="_token" value="g89Nhtr6Kx4IVfB2vyORDbxfn2zAdAcQrvBk8gbj">        </form>
        </div>
@endsection
