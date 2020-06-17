@extends('master')

@section('title', 'All Car Models')

@section('content')

    <div class="starter-template">
      @foreach($carmodels as $carmodel)
            <div class="panel">
            <a href="{{ route('carmodel') }}/{{$carmodel->code}}">
            <a href="{{$carmodel->code}}">
                <img src="http://internet-shop.tmweb.ru/storage/categories/mobile.jpg">
                <h2>{{$carmodel->name}}</h2>
            </a>
            <p>
              {{$carmodel->description}}
            </p>
        </div>
  @endforeach
=======
</div>
@endsection
