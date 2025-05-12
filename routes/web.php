<?php

use App\Http\Controllers\Admin as Admin;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth', 'as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::get('/', [Admin\AdminController::class, 'index'])->name('index');
    Route::resource('dishes', Admin\DishController::class)->except('show');
    Route::resource('categories', Admin\CategoryController::class)->except('show');
    Route::post('change', [Admin\AdminController::class, 'changeStatus'])->name('change');
});
require __DIR__.'/auth.php';

Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/category/{id}', [SiteController::class, 'category'])->name('category');
