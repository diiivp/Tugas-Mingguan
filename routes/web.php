<?php

use App\Models\Berita;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "profile",
        "nama" => "Suryo Adi Prabowo",
        "nohp" => "088226655764",
        "foto" => "images/adiganteng.jpg",
    ]);
});

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'tampildata']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name( 'mahasiswa')->middleware('auth');
Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name( 'tambahmahasiswa')->middleware('auth');

Route::post('/insertdata', [MahasiswaController::class, 'insertdata'])->name( 'insertdata')->middleware('auth');

Route::post('/tampildata(/id)', [MahasiswaController::class, 'tampildata'])->name( 'tampildata')->middleware('auth');
Route::post('/tampildata(/id)', [MahasiswaController::class, 'editdata'])->name( 'editdata')->middleware('auth');

// Auth routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');

// Registration
Route::get('/register', [AuthController::class, 'showRegister'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->middleware('guest');

// Password reset (forgot/reset)
Route::get('/forgot-password', [AuthController::class, 'showForgot'])->name('password.request')->middleware('guest');
Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email')->middleware('guest');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset')->middleware('guest');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update')->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@index');

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
    // Pastikan rute ini ada
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

// Jika Anda ingin mengalihkan halaman utama (/) ke mahasiswa
Route::get('/', function () {
    return redirect('/mahasiswa');
});
});

