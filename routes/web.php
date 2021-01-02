<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;

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
})->middleware('guest');

Route::middleware(['auth'])->group(function(){

    Route::middleware(['role:admin'])->group(function () {

        Route::get('/master', [MasterController::class, 'index'])->name('master');
        
    });

    Route::middleware(['role:committee|admin'])->group(function () {

        Route::get('/pendaftaran', function () {
            return view('admin.pendaftaran');
        })->name('pendaftaran');

        Route::get('/pembayaran', function () {
            return view('admin.pembayaran');
        })->name('pembayaran');
    });

    Route::middleware(['role:interviewer|committee|admin'])->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::get('/seleksi', function () {
            return view('admin.seleksi');
        })->name('seleksi');

    });

    Route::get('/home', function () {
        return view('siswa.home');
    })->name('home');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

});

require __DIR__.'/auth.php';
