<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');
Auth::routes();

