<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products()
    {
      return $this->belongsToMany( Product::class)->withPivot('count')->WithTimestamps();
    }

    public function fullPrice()
    {
      $sum = 0;
      foreach ($this->products as $product){
        $sum += $product -> GetPrice($product->pivot->count);
      }
      return $sum;
    }
}
