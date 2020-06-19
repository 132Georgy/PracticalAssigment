<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
  public function getCarmodel(){
    $carmodel=Carmodel::find($this-> model_id);
  }
    public function carmodel(){
      return $this->belongsTo(Carmodel::class);
    }
}
