<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
Route::get('/home', function () {
    return view('home');
})->middleware('role');

// Route::get('/home', function () {
//     return view('home');
// })->middleware('role:admin');


// Route::get('/home/{role}', function () {
//     return view('home');
// })->middleware('role');

Route::get('/admin', function () {
    return view('admin');
})->name("admin");

Route::get('/user', function () {
    return view('user');
})->name("user");


Route::get('/login', function () {
    return view('login');
})->name("login");
Route::post('loginbtn', [LoginController::class, 'indexAction']);