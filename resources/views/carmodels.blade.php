@extends('master')

@section('title', 'All Car Models')

@section('content')

    <div class="starter-template">
      @foreach($carmodels as $carmodel)
            <div class="panel">
            <a href="{{$carmodel->code}}">
              <h2>{{$carmodel->name}}</h2>
                <img src={{$carmodel->image}}>

            </a>
            <p>
              {{$carmodel->description}}
            </p>
        </div>
  @endforeach
</div>
@endsection
