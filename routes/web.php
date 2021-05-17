<?php

// use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//frontend
Route::view('/', 'index')->name('home');
Route::view('/about-us', 'about-us')->name('about-us');
Route::view('/shop', 'shop')->name('shop');
Route::view('/cart', 'cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/contact', 'contact')->name('contact');

Route::middleware('auth')->group(function () {
    
});

Route::middleware('authadmin')->group(function () {
    Route::view('/admins', 'admin.index')->name('admins');
});
