<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

// use function Pest\Laravel\session;

class cartController extends Controller
{
    //
    public function add(Request $request, $id, $price){
  $product= Product::findOrFail($id);
  $cart = session()->get('cart', []);
  if(isset($cart[$id])){
    $cart[$id]['quantity']++;

  }
  else{
    $cart[$id]=[
    'id'=>$product->id,
    'name'=>$product->name,
    'price'=>$price,
    'quantity'=>1
    ];
  }
  session()->put('cart',$cart);
  return redirect()->back();
    }

}

