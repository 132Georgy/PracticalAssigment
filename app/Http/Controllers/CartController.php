<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
  public function cart(){
    $orderId = session ('orderId');
    if (!is_null($orderId)){
      $order = findOrFail($orderId);
    }
    return view('cart');
  }
  public function order(){
    return view('order');
  }
}
  public function cartAdd($productId)
  {
  $orderId = session('orderId');
  if (is_null($orderId))
    {
    $order = Order::create()->id;
    session(['orderId'->$order->id])
  } else {
    $order = Order::find($orderId);
  }
  $order->products()->attach($productId);

    return view('cart', compact('order'));
  }

}
