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

Route::get('/login', function () {
    return view('login');
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

Route::get('/ap/ap', function () {
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

Route::get('/report/report', function () {
    return view('report/report');
});

Route::get('/setting/setting', function () {
    return view('setting/setting');
});

Route::get('setting/vendor/new', function () {
    return view('setting/vendor/new');
});

Route::get('setting/vendor', function () {
    return view('setting/vendor/vendor');
});

Route::get('setting/wh/new', function () {
    return view('setting/wh/new');
});

Route::get('setting/wh', function () {
    return view('setting/wh/wh');
});

