<?php
use Resource\views\product_crud;
use App\Http\Controllers\ProductController;
use Resources\views\Admin\Dashboard;
use Resources\views\Admin\Users;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use function Pest\Laravel\post;
use illuminate\Http\Middleware\AdminMiddleware;
// CRUD
Route::resource('product_crud', ProductController::class);

// LOGIN AND REGISTER
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
Route::get('/category', function () {
    return view('category');
});

Route::get('/cat_kayu_besi', function () {
    return view('category/cat_kayu_besi');
});

route::get('/cat_eksterior', function () {
    return view('category/cat_eksterior');
});

route::get('/cat_premium', function () {
    return view('category/cat_premium');
});

route::get('/cat_interior', function () {
    return view('category/cat_interior');
});

//produk//

//pages//
route::get('/pages', function () {
    return view('pages');
});

route::get('/cart', function () {
    return view('pages/cart');
});

route::get('/checkout', function () {
    return view('pages/checkout');
});

route::get('/payment', function () {
    return view('pages/payment');
});

route::get('/product_detail', function () {
    return view('pages/product_detail');
});


// admin dashboard
Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    
    // Rute untuk Halaman Utama Dashboard
    Route::get('/', function () {
        return view('admin/dashboard'); 
    })->name('admin/dashboard');

    // --- Rute untuk Halaman Users ---
    //URL: http://127.0.0.1:8000/dashboard/users
    // Nama rute: admin/users

    // Rute untuk Halaman Products
    Route::get('/product_management', function () {
        // Ini akan mencari file di resources/views/admin/products.blade.php
        return view('admin/product_management/product_dashboard');
    })->name('product_management');


    

});
    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });



require __DIR__.'/auth.php';



