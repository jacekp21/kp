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

Route::get('/', function () {
    return view('index');
});


Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/admin/new', function () {
    return view('admin/new');
});

Route::get('/admin/admin', function () {
    return view('admin/admin');
});

Route::get('/po', function () {
    return view('po/purchaseorder');
});

Route::get('/po/new', function () {
    return view('po/new');
});

Route::get('/ap', function () {
    return view('ap/ap');
});

Route::get('/ap/new', function () {
    return view('ap/new');
});

Route::get('/payment', function () {
    return view('payment/payment');
});

Route::get('/payment/new', function () {
    return view('payment/new');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/setting', function () {
    return view('setting');
});

Route::get('/login', function () {
    return view('login');
});