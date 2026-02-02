<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\adminGaurd;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix("/customer")->controller(CustomerController::class)->middleware(adminGaurd::class)->group(function(){
    Route::get("/","index");
    Route::view('/create','Customer.insert');
    Route::post('upload',"create");
});
Route::prefix("/products")->controller(ProductController::class)->middleware(adminGaurd::class)->group(function(){
    Route::get("/add","showForm");
    Route::post('create',"create");
});
Route::post('cart/add/{id}/{price}', [cartController::class,'add']);
Route::get('/',[ProductController::class, 'landing']);
Broadcast::routes();
require __DIR__.'/auth.php';