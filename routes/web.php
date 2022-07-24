<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/', [\App\Http\Controllers\page\HomeController::class,'index'])->name('home');
Auth::routes();
Route::get('/profile',[\App\Http\Controllers\Auth\AuthController::class,'profile'])->name('profile');
Route::get('/change-password',[\App\Http\Controllers\Auth\AuthController::class,'viewChangePassUser'])->name('changePass');
Route::post('/change-password',[\App\Http\Controllers\Auth\AuthController::class,'changePassword'])->name('changePass');
Route::get('/summary', [\App\Http\Controllers\page\HomeController::class,'summary'])->name('summary');
Route::get('/currency', [\App\Http\Controllers\page\HomeController::class,'currency'])->name('currency');
Route::get('/binance', [\App\Http\Controllers\page\HomeController::class,'binance'])->name('binance');
Route::get('/page', [\App\Http\Controllers\page\HomeController::class,'page'])->name('page');
Route::get('/page/{id}', [\App\Http\Controllers\page\HomeController::class,'pageDetail'])->name('page.detail');
Route::get('/expert', [\App\Http\Controllers\page\HomeController::class,'expert'])->name('expert');
Route::get('/expert/{id}', [\App\Http\Controllers\page\HomeController::class,'expertDetail'])->name('expert.detail');
Route::get('/expert-profile/{id}', [\App\Http\Controllers\page\HomeController::class,'expertProfile'])->name('expert.profile');
Route::post('/expert-subcribe', [\App\Http\Controllers\page\HomeController::class,'expertSubcribe'])->name('expert.subcribe');
Route::post('/expert-unsubcribe', [\App\Http\Controllers\page\HomeController::class,'expertUnSubcribe'])->name('expert.unsubcribe');
Route::get('/expert-list', [\App\Http\Controllers\page\HomeController::class,'expertList'])->name('expert.list');
Route::post('/expert', [\App\Http\Controllers\page\HomeController::class,'comment'])->name('comment');
Route::resource('/posts', App\Http\Controllers\PostController::class);

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\admin\HomeController::class, 'index'])->name('home');
    Route::resource('/pages', App\Http\Controllers\Admin\PageController::class);
    Route::resource('/users', App\Http\Controllers\Admin\UserController::class);
    Route::get('/profile',[\App\Http\Controllers\Auth\AuthController::class,'profileAdmin'])->name('profile');
    Route::get('/change-password',[\App\Http\Controllers\Auth\AuthController::class,'viewChangePass'])->name('changePass');
    Route::post('/change-password',[\App\Http\Controllers\Auth\AuthController::class,'changePassword'])->name('changePass');
    Route::resource('/posts', App\Http\Controllers\admin\PostController::class);
    Route::resource('/comments', App\Http\Controllers\admin\CommentController::class);
    Route::resource('/stars', App\Http\Controllers\admin\StarController::class);
});
