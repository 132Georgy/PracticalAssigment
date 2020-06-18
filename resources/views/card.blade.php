<div class="col-sm-6 col-md-4">
<div class="thumbnail">

<img src={{$product->image}}>
<div class="caption">
<h3>{{$product->name}}</h3>
  <p>{{$product->price}} €</p>
      <p>
        <form action="{{ route('cart-add', $product)}}" method="POST">
          <button type="submit" class="btn btn-primary" role="button">Add to cart</button>
            <!-- <a href="{{route('product', [ $product->code])}}" class="btn btn-default" role="button">Info</a>-->
  
        @csrf </form>
      </p>
    </div>
  </div>
</div>
