<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/user', function () {
    return view('user');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/penggalangan', function () {
    return view('penggalangan');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/pengguna', function () {
    return view('user.pengguna');
});
