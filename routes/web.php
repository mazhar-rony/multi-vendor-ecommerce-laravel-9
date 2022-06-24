<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('login-register',[LoginController::class, 'login'])->name('customer.login');

Route::prefix('admin')->name('admin.')->group(function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/products', [ProductController::class, 'index'])->name('product.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/products', [ProductController::class, 'store'])->name('product.store');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
});