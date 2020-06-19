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
}
