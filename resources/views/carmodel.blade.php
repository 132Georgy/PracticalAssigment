@extends('master')

@section('title',$carmodel->name)

@section('content')
<div class="container">
    <div class="starter-template">
    <h1>
     {{$carmodel->name}}
    </h1>
    <p>
        {{$carmodel->description}}
    </p>
     <div class="row">
      @foreach($carmodel->products as $product)
        @include('card', compact('product'))
      @endforeach
     </div>
    </div>
@endsection
