<?php

namespace App\Http\Controllers;

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
        
    }
}
