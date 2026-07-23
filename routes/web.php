<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/news/{slug}', [NewsController::class, 'show'])
    ->name('news.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::get('/category/{slug}', [CategoryController::class, 'show'])
//     ->name('category.show');

Route::get('/category/{slug}',
    [CategoryController::class,'show'])
    ->name('category.show');