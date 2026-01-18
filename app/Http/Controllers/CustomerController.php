<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(){
       $users= User::where('user_type',"customer")->get();
        return view('Customer.home',["users"=>$users]);
    }
    public function update(Request $request){
        $request->validate([
         "name"=>"required|min:3|max:40",
         "lastName"=>"required|min:4|max:40",
         "email"=>"required|min:7",
         "image"=>"nullable|mimes:png,jpg,gif,jpeg.avif",
        ]);
        $imagePath=null;
        if($request->hasFile("image")){
         $imagePath = $request->file("image")->store("images","public");
        }
    $customer = new Customer();
    $customer->name = $request->name;
    $customer->lastName = $request->lastName;
    $customer->email=$request->email;
    $customer->gender=$request->gender;
    $customer->img_url=$imagePath;
     $customer->save();
     redirect('/customer');
    }
}
