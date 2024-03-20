<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CookiesController;


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

// sessions code

Route::get('/', [PagesController::class,'index']);
Route::get('/about',[PagesController::class,'about']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// cookies code
Route::get('/set-cookie',[CookiesController::class, 'setCookie']);
Route::get('/get-cookie',[CookiesController::class, 'getCookie']);
Route::get('/delete-cookie',[CookiesController::class, 'deleteCookie']);

Route::get('/home-cookie',[CookiesController::class, 'homeCookie']);


