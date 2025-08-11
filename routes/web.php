<?php
// File: routes/web.php
use Resources\views\Admin\Dashboard;
use Resources\views\Admin\Users;
use Resources\views\Admin\Products;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use function Pest\Laravel\post;

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
})->name('cart');

Route::get('/', function () {
return view('home');
});

//kategori//
//produk//

//admin dashboard//


// ... kode routing lainnya

// admin dashboard
Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    
    // Rute untuk Halaman Utama Dashboard
    Route::get('/', function () {
        return view('admin/dashboard'); 
    })->name('admin/dashboard');

    // --- Rute untuk Halaman Users ---
    //URL: http://127.0.0.1:8000/dashboard/users
    // Nama rute: admin/users
    Route::get('/users', function () {
        // Ini akan mencari file di resources/views/admin/users.blade.php
        return view('admin/users');
    })->name('admin/dashboard/users');
    
    // Rute untuk Halaman Products
    Route::get('/products', function () {
        // Ini akan mencari file di resources/views/admin/products.blade.php
        return view('admin/products');

    })->name('admin/dashboard/products');
    
    
});









    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });




require __DIR__.'/auth.php';



