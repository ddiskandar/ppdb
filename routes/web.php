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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/master', function () {
    return view('admin.master');
})->middleware(['auth'])->name('master');

Route::get('/pendaftaran', function () {
    return view('admin.pendaftaran');
})->middleware(['auth'])->name('pendaftaran');

Route::get('/pembayaran', function () {
    return view('admin.pembayaran');
})->middleware(['auth'])->name('pembayaran');

Route::get('/seleksi', function () {
    return view('admin.seleksi');
})->middleware(['auth'])->name('seleksi');

require __DIR__.'/auth.php';
