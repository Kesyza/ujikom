<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\PaketSoalController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\UjianController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(
    [
        'register' => false
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function(){
    Route::get('/', function () {
        return 'halaman admin';
    });

    Route::get('/profile', function () {
        return 'halaman profile admin';
    });
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function(){
    Route::resource('/mapel', MataPelajaranController::class);
    Route::resource('/paket', PaketSoalController::class);
    Route::resource('/soal', SoalController::class);
    Route::resource('/ujian', UjianController::class);
    Route::resource('/user-manajemen', UserController::class);
});
