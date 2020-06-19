@extends('master')

@section('content')
<div class="starter-template">
                            <h1>Cart</h1>
    <p>Order</p>
    <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Amount</th>
                <th>Price</th>
                <th>Cost</th>
            </tr>
            </thead>
            <tbody>
              @foreach($order->products as $product)
                            <tr>
                    <td>


                            <img height="56px" src={{$product->image}}>
                            {{$product->name}}
                        </a>
                    </td>
                    <td><span class="badge">1</span>
                        <div class="btn-group form-inline">
                            <form action="{{ route('cart-remove',$product) }}" method="POST">
                                <button type="submit" class="btn btn-danger" href=""><span
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                @csrf
                                                         </form>
                            <form action="{{ route('cart-add',$product) }}" method="POST">
                                <button type="submit" class="btn btn-success"
                                        href="{{ route('cart-add',$product) }}"><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                @csrf                            </form>
                        </div>
                    </td>
                    <td>{{$product->price}} €</td>
                </tr>
                @endforeach
                        <tr>
                <td colspan="3">Total cost:</td>
                <td>12490 ₽</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="http://internet-shop.tmweb.ru/basket/place">Confirm Order</a>
        </div>
    </div>
    </div>
@endsection
