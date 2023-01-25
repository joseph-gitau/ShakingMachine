<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// product requires to be atheenticated and verified
Route::get('/products', function () {
    return view('products');
})->middleware(['auth', 'verified'])->name('products');
// wallet requires to be atheenticated and verified
Route::get('/wallet', function () {
    return view('wallet');
})->middleware(['auth', 'verified'])->name('wallet');
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

require __DIR__ . '/auth.php';
