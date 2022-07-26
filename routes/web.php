<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/login', function () {
    return view('login');
});


Route::post('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/registeruser', [UserController::class, 'registerUser']);



Route::get('/product', [ProductController::class, 'index']);
Route::get('/', [ProductController::class, 'index']);

Route::get('/detail/{id}', [ProductController::class, 'detail']);

Route::post('addToCart', [ProductController::class, 'addToCart']);
Route::get('cartList', [ProductController::class, 'cartList']);
Route::get('removecart/{id}', [ProductController::class, 'removeCartItem']);
Route::get('ordernow', [ProductController::class, 'orderNow']);
Route::post('orderplace', [ProductController::class, 'orderPlace']);
Route::get('myorder', [ProductController::class, 'myOrder']);




Route::get('/logout', [UserController::class, 'logout']);






