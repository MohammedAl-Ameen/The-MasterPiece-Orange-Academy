<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AppealController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomAuthController;

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

Route::get('/', [HomeController::class, 'index']);


// Route::get('/', [CustomAuthController::class, 'dashboard'])->middleware('isLoggedIn');

Route::get('/login', [CustomAuthController::class, 'login']);
Route::get('/logout', [CustomAuthController::class, 'logout']);
Route::get('/join', [CustomAuthController::class, 'registration']);
Route::post('/register-user', [CustomAuthController::class, 'store'])->name('register-user');
route::post('/login-user', [CustomAuthController::class, 'check'])->name('login-user');
Route::get('/user/profile/{user}', [UserController::class, 'showProfile']);
Route::get('/user/{user}', [UserController::class, 'showUserList']);
Route::get('/user/addproduct/{user}', [UserController::class, 'createProduct']);
Route::post('/product/create', [ProductController::class, 'store']);
Route::get('/product/{product}', [ProductController::class, 'show']);
Route::get('/product', [ProductController::class, 'index']);
Route::post('/comment', [CommentController::class, 'store']);
Route::get('/category', [CategoryController::class, 'index']);
Route::post('/appeal', [AppealController::class, 'create']);
Route::get('/appeal', [UserController::class, 'showAppeal']);
Route::get('/sendedappeal', [AppealController::class, 'index']);
Route::delete('appeal/delete/{appeal}', [AppealController::class, 'destroy']);
Route::delete('product/delete/{product}', [ProductController::class, 'destroy']);
Route::get('/product/edit/{product}', [ProductController::class, 'edit']);
Route::put('/product/update/{product}', [ProductController::class, 'update']);
Route::get('/user/edit/{user}', [UserController::class, 'edit']);
Route::put('/user/update/{user}', [UserController::class, 'update']);
