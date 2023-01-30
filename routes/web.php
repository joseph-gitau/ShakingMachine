<?php

use App\Http\Controllers\ProductmdController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Products;
use App\Http\Controllers\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [
    Dashboard::class, 'index'
])->middleware(['auth', 'verified'])->name('dashboard');
// product requires to be atheenticated and verified
Route::get('/products', [
    Products::class, 'index'
])->middleware(['auth', 'verified'])->name('products');
/* Route::get('/products', function () {
    return view('products');
})->middleware(['auth', 'verified'])->name('products'); */
// product details
Route::get('/products-view/{id}', [
    Products::class, 'show'
])->middleware(['auth', 'verified'])->name('products-view');
// wallet requires to be atheenticated and verified
Route::get('/wallet', function () {
    return view('wallet');
})->middleware(['auth', 'verified'])->name('wallet');
// transactions
Route::get('/transactions', function () {
    return view('transactions');
})->middleware(['auth', 'verified'])->name('transactions');
// admin routes
Route::get('/admin', function () {
    return view('admin/index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin', function () {
        return view('admin/index');
    });
});
// users from admin panel
Route::middleware(['auth', 'admin'])->group(function () {
    /* Route::get('admin/users', function () {
        return view('admin/users');
    })->name('admin.users'); */
    Route::get('admin/users', [
        UserController::class, 'index'
    ])->name('admin.users');
});
Route::middleware(['auth', 'admin'])->group(
    function () {
        Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    }
);
// admin.admins
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/admins', [
        UserController::class, 'admins'
    ])->name('admin.admins');
});
// admin.products
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/products', [
        ProductmdController::class, 'index'
    ])->name('admin.products');
    // admin.products.create
    Route::get('admin/products/create', [
        ProductmdController::class, 'create'
    ])->name('admin.products.create');
    // admin.products.store
    Route::POST('admin/products/store', [
        ProductmdController::class, 'store'
    ])->name('admin.products.store');
});

require __DIR__ . '/auth.php';
