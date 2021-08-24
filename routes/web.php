<?php

use App\bread_images;
use App\Http\Controllers\BlogCatController;
use App\Http\Controllers\BreadImagesController;
use App\Http\Controllers\image;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\PdEnteryController;

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

// Route::get('/', [Pagecontroller::class,'home']);
Route::get('/', [BreadImagesController::class,'show']);
Route::get('/login', [LoginController::class,'index']);
Route::get('/signup', [LoginController::class,'register']);
Route::Post('login/auth', [LoginController::class,'auth'])->name('login.auth');
Route::Post('signup/create', [LoginController::class,'create'])->name('signup.create');
Route::get('/about', [Pagecontroller::class,'about']);
Route::get('/advertise', [Pagecontroller::class,'advertise']);
Route::get('/blog', [BlogCatController::class,'show']);
Route::get('/contact', [Pagecontroller::class,'contact']);
Route::get('/faq', [Pagecontroller::class,'faq']);
Route::get('/privacy-policy', [Pagecontroller::class,'privacy_policy']);
Route::get('/site-news', [Pagecontroller::class,'site_news']);
Route::get('/terms-of-use', [Pagecontroller::class,'terms_of_use']);
Route::get('/copyright-info', [Pagecontroller::class,'copyright_info']);
