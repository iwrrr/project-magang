<?php

use App\Http\Controllers\HomeController;
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

Route::fallback(function ()
{
    return redirect()->back();
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/check-products', [HomeController::class, 'checkProducts'])->name('check-products');
Route::post('/add-product', [HomeController::class, 'addProduct'])->name('add-product');
Route::get('/get-product/{id}', [HomeController::class, 'getProduct'])->name('get-product');
Route::post('/edit-product/{id}', [HomeController::class, 'editProduct'])->name('edit-product');

Auth::routes();
