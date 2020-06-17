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
      @include('card',['carmodel' => $carmodel])
     </div>
    </div>
@endsection
