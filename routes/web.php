<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'homepage'])->name('home.page');


Route::prefix('admin')->group(function (){

    Route::middleware(['guest'])->group(function (){
        Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
        Route::post('/create', [AdminController::class, 'create'])->name('admin.create');
        Route::post('/check', [AdminController::class, 'check'])->name('admin.check');

    });
    Route::middleware(['auth:admin'])->group(function (){
        Route::get('/home', [AdminController::class, 'home'])->name('admin.home');
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    });
});

Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/banner', [BannerController::class, 'index'])->name('admin.banner');
Route::resource('/admin/brand', BrandController::class)->except('create');
Route::resource('/admin/product', ProductController::class)->except('create');
Route::resource('/admin/category', CategoryController::class)->except('create');


Auth::routes();

