<?php

namespace App\Http\Controllers;

use App\Carmodel;
use App\Product;
use Illuminate\Http\Request;


class ControllerMain extends Controller
{
    public function main(){
      $products = Product::get();
      return view('main', compact ('products'));
    }
    public function carmodels(){
      $carmodels = Carmodel::get();
      return view('carmodels', compact('carmodels'));
    }
    public function carmodel($code){
      $carmodel = Carmodel::where('code', $code)->first();
      return view('carmodel', compact('carmodel'));

    }
    public function product($category, $product = null){
      return view('product', ['product' => $product]);
    }
    public function cart(){
      return view('cart');
    }
    public function order(){
      return view('order');
    }
}
