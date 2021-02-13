<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Livewire\Student\Berkas;
use Illuminate\Http\Request;

use App\Http\Livewire\Student\Biodata;
use App\Http\Livewire\Student\Home;
use App\Http\Livewire\Student\Group;
use App\Http\Livewire\Student\Pembayaran;
use App\Http\Livewire\Student\PpdbJurusan;
use App\Http\Livewire\Admin\Confirmation;

use App\Models\Ppdb;


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

Route::view('/', 'welcome')->middleware('guest');

Route::middleware(['auth'])->group(function(){

    Route::middleware(['role:admin'])->group(function () {

        Route::get('/master', [PagesController::class, 'master'])->name('master');
        
    });

    Route::middleware(['role:committee|admin'])->group(function () {

        Route::view('/pendaftaran', 'admin.pendaftaran')->name('pendaftaran');
       
    });

    Route::middleware(['role:interviewer|committee|admin'])->group(function () {

        Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
        Route::view('/seleksi',  'admin.seleksi')->name('seleksi');
        Route::get('/confirmation', Confirmation::class)->name('confirmation');

    });

    Route::middleware(['role:student'])->group(function () {

        Route::get('/home', Home::class)->name('home');
        Route::get('/biodata', Biodata::class)->name('biodata');
        Route::get('/berkas', Berkas::class)->name('berkas');
        Route::get('/jurusan', PpdbJurusan::class)->name('jurusan');
        Route::get('/group', Group::class)->name('group');
        Route::get('/pembayaran', Pembayaran::class)->name('pembayaran');

    });

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

});

require __DIR__.'/auth.php';
