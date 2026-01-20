<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\productDetails;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function showForm(){
        return view('Product.add');
    }
    public function create(Request $request){
        $request->validate([
         "name"=>"required|min:4|max:50",
         "price"=>"required|min:1|max:10",
         "quantity"=>"required|min:1|max:20",
        ]);
        $path=null;
        if($request->hasFile("photo")){
            $path=$request->file("photo")->store("product_img","public");
        }
        $product=new Product();
        $product->name=$request->name;
        $product->save();
        $proDetails=new productDetails();
        $proDetails->price=$request->price;
        $proDetails->description=$request->description;
        $proDetails->quantity=$request->quantity;
        $proDetails->made_in=$request->madein;
        $proDetails->product_id=$product->id;
        $proDetails->img_url= $path;
        $proDetails->save();
    }
}
