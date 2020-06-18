<div class="col-sm-6 col-md-4">
<div class="thumbnail">

<img src="https://s.aolcdn.com/commerce/autodata/images/USC90BMC681A021001.jpg" alt="iPhone X 256GB">
<div class="caption">
<h3>{{$product->name}}</h3>
  <p>{{$product->price}} €</p>
      <p>
<<<<<<< HEAD
        <form action="{{ route('card-add', $product)}}" method="POST">
          <button type="submit" class="btn btn-primary" role="button">Add to cart</button>
            <!-- <a href="{{route('product', [ $product->code])}}" class="btn btn-default" role="button">Info</a>-->
        @csrf </form>
=======
        <form action="http://internet-shop.tmweb.ru/basket/add/2" method="POST">
          <button type="submit" class="btn btn-primary" role="button">Add to cart</button>
            <a href="{{route('product', [$carmodel->code, $product->code])}}" class="btn btn-default" role="button">Info</a>
        <input type="hidden" name="_token" value="g89Nhtr6Kx4IVfB2vyORDbxfn2zAdAcQrvBk8gbj">            </form>
>>>>>>> e10387212fe84bbef7887049262c3ae1ba996e6c
      </p>
    </div>
  </div>
</div>
