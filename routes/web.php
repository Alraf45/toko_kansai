<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::get('/login', [AuthController::class, 'Login'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

//homepage//
Route::get('/product', function () {
    return view('product');
});

Route::get('/colors', function () {
    return view('colors');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/', function () {
return view('home');
});

//kategori//
Route::get('/cat-besi-kayu', function () {
    return view('cat-besi-kayu');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
});

require __DIR__.'/auth.php';
