<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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




Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/postlogin', [AuthController::class, 'authenticate'])->name('postlogin');
});

Route::group(['middleware' => ['auth', 'ceklevel:3','revalidate']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});
Route::group(['middleware' => ['auth', 'ceklevel:0', 'revalidate']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::prefix('/simpeg')->namespace('App\\Http\\Controllers\\simpeg')-> group (function(){
        Route::get('/', 'DashAdminController@index');
        Route::get('/biodata/data-utama', 'DataUtamaController@index');
      });
    Route::prefix('/manajemen')->namespace('App\\Http\\Controllers\\manajemen')-> group (function(){
        Route::get('/', 'DashManajemenController@index');
        Route::get('/simpeg/data-master/master-umum', 'MasterUmumController@index');
      });
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
