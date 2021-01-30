<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

/**
 *  Index page
 */
Route::get('/home', [ProductController::class,'index'])->name('home');

/**
 * Categories
 */
Route::get('/product/dekstop', [ProductController::class,'desktop'])->name('desktop');
Route::get('/product/laptop', [ProductController::class,'laptop'])->name('laptop');
Route::get('/product/console', [ProductController::class,'console'])->name('console');
Route::get('/product/game', [ProductController::class,'game'])->name('game');