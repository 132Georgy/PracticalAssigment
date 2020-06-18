@extends('master')

@section('title', 'Main page')

@section('content')

    <div class="starter-template">
                            <h1>All Cars</h1>
    
    <div class="row">
      @foreach ($products as $product)
              @include('card', compact('product'))
      @endforeach
    </div>
    <nav>
        <ul class="pagination">

                            <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
                </li>
                    </ul>
    </nav>
    </div>
@endsection
