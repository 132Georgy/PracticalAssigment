@extends('master')

@section('content')
<div class="starter-template">
                            <h1>Корзина</h1>
    <p>Оформление заказа</p>
    <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Название</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>Стоимость</th>
            </tr>
            </thead>
            <tbody>
                            <tr>
                    <td>
                        <a href="http://internet-shop.tmweb.ru/mobiles/htc_one_s">
                            <img height="56px" src="http://internet-shop.tmweb.ru/storage/products/htc_one_s.png">
                            HTC One S
                        </a>
                    </td>
                    <td><span class="badge">1</span>
                        <div class="btn-group form-inline">
                            <form action="http://internet-shop.tmweb.ru/basket/remove/3" method="POST">
                                <button type="submit" class="btn btn-danger" href=""><span
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                <input type="hidden" name="_token" value="IDQ7ZubDesbUFWGlOgqg0sun3o0pyc37AB0Yvwlv">                            </form>
                            <form action="http://internet-shop.tmweb.ru/basket/add/3" method="POST">
                                <button type="submit" class="btn btn-success"
                                        href=""><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                <input type="hidden" name="_token" value="IDQ7ZubDesbUFWGlOgqg0sun3o0pyc37AB0Yvwlv">                            </form>
                        </div>
                    </td>
                    <td>12490 ₽</td>
                    <td>12490 ₽</td>
                </tr>
                        <tr>
                <td colspan="3">Общая стоимость:</td>
                <td>12490 ₽</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="http://internet-shop.tmweb.ru/basket/place">Оформить заказ</a>
        </div>
    </div>
    </div>
@endsection
