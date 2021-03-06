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
      $products = Product::where('model_id', $carmodel->id)->get();
      return view('carmodel', compact('carmodel', 'products'));

    }
    public function product($carmodel, $product = null){
         return view('product', ['product' => $product]);
       }
    public function changelocale($locale)
    {
      App::setLocale($locale);
      $currentLocale = App::getLocale();
      return redirect()->back();
    }

}
