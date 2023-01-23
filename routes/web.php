<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

require __DIR__ . '/auth.php';
