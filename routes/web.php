<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;


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

require __DIR__.'/auth.php';

//Route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin'])->name('admin.dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/cashier', [HomeController::class, 'cashier'])->name('admin.cashier');
    Route::get('admin/product', [HomeController::class, 'product'])->name('admin.product');
    Route::get('admin/sales', [HomeController::class, 'sales'])->name('admin.sales');
    Route::get('admin/settings', [HomeController::class, 'settings'])->name('admin.settings');

    // Routes for managing products 
    Route::get('admin/product', [ProductController::class, 'index'])->name('admin.product.index');
    Route::post('admin/product', [ProductController::class, 'store'])->name('admin.product.store');
    Route::get('admin/product/{product}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('admin/product/{product}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::delete('admin/product/{product}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
});