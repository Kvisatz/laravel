<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'indexAction']);

Route::get('/category', [IndexController::class, 'categoryAction']);

Route::get('/product', [IndexController::class, 'productAction']);

Route::get('/cart', [IndexController::class, 'cartAction']);

Route::get('/cabinet', [IndexController::class, 'cabinetAction']);

