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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/password', function () {
    return view('password');
});

Route::get('/setting', function () {
    return view('admin.setting');
});

Route::get('/profile', function () {
    return view('admin.profile');
});

Route::get('/artikel', function () {
    return view('admin.artikel');
});

Route::get('/program', function () {
    return view('admin.program');
});

Route::get('/daftar', function () {
    return view('daftar');
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

Route::get('/blog', function () {
    return view('user.blog');
});

Route::get('/blogdetails', function () {
    return view('user.blogdetails');
});

Route::get('/donasi', function () {
    return view('user.donasi');
});

Route::get('/detaildonasi', function () {
    return view('user.detaildonasi');
});

Route::get('/orangdonasi', function () {
    return view('user.orangdonasi');
});
