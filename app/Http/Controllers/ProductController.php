<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\productDetails;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function landing(){
        $products =Product::with('productDetail')->get();
      return view('welcome', ['products'=>$products]); 

    }
    public function showForm(){
        return view('Product.add');
    }

    public function create(Request $request){
        $request->validate([
         "name"=>"required|min:4|max:50",
         "price"=>"required|min:1|max:10",
         "quantity"=>"required|min:1|max:20",
         "image"=>"nullable|min:5|max:100,mimes:jpg,jpeg,avif,png"
        ]);
        $path=null;
        if($request->hasFile("photo")){
            $path=$request->file("photo")->store("images","public");
        }
        $products=new Product();
        $products->name=$request->name;
        $products->save();
        $proDetails= new productDetails();
        $proDetails->price=$request->price;
        $proDetails->description=$request->description;
        $proDetails->quantity=$request->quantity;
        $proDetails->made_in=$request->madein;
        $proDetails->product_id=$products->id;
        $proDetails->img_url = $path;
        $proDetails->save();
        return redirect("/");
    }
}
