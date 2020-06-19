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
  if($order->products->contains($productId)){
    $pivotRow = $order -> products()->where('product_id',$productId)->first()->pivot;
    $pivotRow->count++;
    $pivotRow->update();
  } else {
    $order->products()->attach($productId);
  }
    return redirect()->route('cart');
  }

  public function cartRemove($productId)
  {
    $orderid = session('orderId');
    if (is_null($orderId))
    {
      return redirect()->route('cart');
    }
    $order = Order::find($orderId);

    if($order->products->contains($productId)) {
      $pivotRow=$order->products()->where('product_id',$productId)->first()->pivot;
      if($pivotRow->count<2){
        $order->products()->detach($productId);
      } else {
        $pivotRow->count--;
        $pivotRow->update();
      }
    }
    return redirect()->route('cart');
  }






}
