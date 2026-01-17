<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(){
       $users= User::where('user_type',"customer")->get();
        return view('Customer.home',["users"=>$users]);
    }
}
