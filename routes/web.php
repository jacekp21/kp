<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PoController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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

// Login Page
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);


Route::get('/dashboard', function () {
    return view('dashboard/index');
});

Route::middleware(['auth'])->group(function () {
    
    // User Url
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/new', [UserController::class, 'create']);
    Route::post('/user/store', [UserController::class, 'store']); // Store User Information
    Route::get('/user/edit/{id}', [UserController::class, 'edit']); // Edit User Information
    Route::get('/user/disable', [UserController::class, 'disable']); // Disable User Information

    // Vendor
    Route::get('/setting/vendor', [VendorController::class, 'index']);
    Route::get('/setting/vendor/new', [VendorController::class, 'create']);
    Route::post('/setting/vendor/store', [VendorController::class, 'store']); // Store Vendor Information
    Route::get('/setting/vendor/edit/{id}', [VendorController::class, 'edit']);
    Route::get('/setting/vendor/delete/{id}', [VendorController::class, 'delete']);

    // Warehouse
    Route::get('/setting/wh', [WarehouseController::class, 'index']);
    Route::get('/setting/wh/new', [WarehouseController::class, 'create']);
    Route::post('/setting/wh/store', [WarehouseController::class, 'store']); // Store Warehouse Information
    Route::get('/setting/wh/edit/{id}', [WarehouseController::class, 'edit']);
    Route::get('/setting/wh/delete/{id}', [WarehouseController::class, 'delete']);
});

// Route::resource('setting/vendor/new', [VendorController::class, 'create']);
// Route::get('setting/vendor/new', function () {
//     return view('setting/vendor/new');
// });


Route::get('/po', [PoController::class, 'index']);
Route::get('/po/show/{id}', [PoController::class, 'show']);

Route::get('/po/new', function () {
    return view('po/new');
});

Route::get('/ap', function () {
    return view('ap/index');
});

Route::get('/ap/new', function () {
    return view('ap/new');
});

Route::get('/payment', function () {
    return view('payment/index');
});

Route::get('/payment/new', function () {
    return view('payment/new');
});

Route::get('/report', function () {
    return view('report/index');
});

Route::get('/setting', function () {
    return view('setting/index');
});

// Route::get('setting/wh', function () {
//     return view('setting/wh/index');
// });

// Route::get('setting/wh/new', function () {
//     return view('setting/wh/new');
// });


//Route::get('/', [LoginController::class, 'login'])->name('login');
//Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');