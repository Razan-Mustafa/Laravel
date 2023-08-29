<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\razan;
use App\Http\Controllers\taskA;


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


// Route::get('about', function () {
//     $data= "My data is available";
//     return view('about',compact('data'));
// });

// Route::get('contact','razan@index');
// Route::get('/+home', function () {
//     return view('home');
// });

// Route::get('/login', [taskA::class, 'get_users1'] );

// Route::get('/', function () {
//     return view('login');
// });


// Route::get('/', [\App\Http\Controllers\taskA::class, 'Select'])->name('CS');
route::post('user',[taskA::class,'data']);
Route::view('login','login');
route::view('home','home');

