<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PoController;
use App\Http\Controllers\VendorController;
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

// Route::get('/', function () {
//     return view('layouts/master');
// });

// Route::get('/', function () {
//     return view('login/login');
// });
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Route::post('/home', [UsersController::class, 'login'])->name('authLogin');
// Route::get('/', [LoginController::class, 'login'])->name('login');
// Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('login', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Route::get('/', [HomeController::class, 'index']);
// Route::get('login', [HomeController::class, 'index']);

// Route::get('/', array(
//     'uses' => 'HomeController@showLogin'
// ));

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/admin/new', function () {
    return view('admin/new');
});

Route::get('/admin/admin', function () {
    return view('admin/admin');
});

// PO Route
// Route::get('/po', function () {
//     return view('po/purchaseorder');
// });

Route::get('/po', [PoController::class, 'index']);
Route::get('/po/show/{id}', [PoController::class, 'show']);

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

// Route::get('setting/vendor', function () {
//     return view('setting/vendor/vendor');
// });

Route::resource('setting/vendor', VendorController::class);

Route::get('setting/wh/new', function () {
    return view('setting/wh/new');
});

Route::get('setting/wh', function () {
    return view('setting/wh/wh');
});

//Route::get('/', [LoginController::class, 'login'])->name('login');
//Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');