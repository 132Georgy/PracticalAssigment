<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class CartController extends Controller
{
  public function cart(){
    $orderId = session('orderId');
    if (!is_null($orderId)){
      $order = Order::findOrFail($orderId);
    }
    return view('cart', compact('order'));
  }
  public function cartplace(){
    return view('order');
  }

  public function cartAdd($productId)
  {
  $orderId = session('orderId');
  if (is_null($orderId))
    {
    $order = Order::create();
    session(['orderId' => $order->id]);
  } else {
    $order = Order::find($orderId);
  }
$order->products()->attach($productId);

    return view('cart', compact('order'));
  }

  public function cartRemove($productId)
  {
  $orderId = session('orderId');
  if (is_null($orderId))
    {
    $order = Order::find('$ordedId');
    $order->products()->detach($productId);
    return view('cart',compact('order'));
    }

  }
}
