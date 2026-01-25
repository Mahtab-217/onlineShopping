<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function product_details()
    {
      return $this->hasMany(productDetails::class,'product_id');
    }
}
