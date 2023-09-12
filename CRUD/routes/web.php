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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('view/{id}', [ProductController::class, 'show'])->name('product.show');
// Route::get('edit/{id}', [ProductController::class, 'edit'])->name('product.show');
// // Route::get('/{id}', [ProductController::class, 'update'])->name('product.u');
// Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
Route::resource('product', ProductController::class);