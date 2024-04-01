<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
<<<<<<< HEAD
    return view('index');
=======
    return view('layouts/home');
>>>>>>> dev
});
Route::view('/home', 'layouts/home')->name('home');
Route::view('/about', 'layouts/about')->name('about');
Route::view('/portfolio', 'layouts/portfolio')->name('portfolio');
Route::view('/service', 'layouts/service')->name('service');
Route::view('/pricing', 'layouts/pricing')->name('pricing');
Route::view('/contact', 'layouts/contact')->name('contact');
