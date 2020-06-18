<div class="col-sm-6 col-md-4">
<div class="thumbnail">

<img src="https://s.aolcdn.com/commerce/autodata/images/USC90BMC681A021001.jpg" alt="iPhone X 256GB">
<div class="caption">
<h3>{{$product->name}}</h3>
  <p>{{$product->price}} €</p>
      <p>
        <form action="{{ route('card-add', $product)}}" method="POST">
          <button type="submit" class="btn btn-primary" role="button">Add to cart</button>
            <!-- <a href="{{route('product', [ $product->code])}}" class="btn btn-default" role="button">Info</a>-->
        @csrf </form>
      </p>
    </div>
  </div>
</div>
