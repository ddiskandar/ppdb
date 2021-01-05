<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Http\Request;

use App\Http\Livewire\Student\Biodata;
use App\Http\Livewire\Student\PpdbJurusan;

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

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::middleware(['auth'])->group(function(){

    Route::middleware(['role:admin'])->group(function () {

        Route::get('/master', [PagesController::class, 'master'])->name('master');
        
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

        Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');

        Route::get('/seleksi', function () {
            return view('admin.seleksi');
        })->name('seleksi');

    });

    Route::get('/home', [PagesController::class, 'home'])->name('home')->middleware(['role:student']);
    
    Route::get('/biodata', Biodata::class);
    Route::get('/jurusan', PpdbJurusan::class);

    Route::post('/jalur', function(Request $request){
        $student = auth()->user()->student;

        Ppdb::create([
            'student_id' => $student->id,
            'major_id' => 1,
            'payment_amount' => 150000,
        ]);

        return redirect()->route('home');
    });


    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

});

require __DIR__.'/auth.php';
