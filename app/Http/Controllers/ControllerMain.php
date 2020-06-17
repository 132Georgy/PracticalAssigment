<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMain extends Controller
{
    public function main(){
      return view('main');
    }

    public function models(){
      return view('categories');
    }
    public function model($model){
      return view('model', compact('model'));

    }

    public function product($product = null){
      return view('product', ['product' => $product]);
    }
}
