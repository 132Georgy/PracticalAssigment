<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function products()
    {
      return $this->belongsToMnay( Product::class );
    }
}
