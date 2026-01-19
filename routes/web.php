<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "Profile",
        "nama" => "Suryo Adi Prabowo",
        "nohp" => "088226655764",
        "foto" => "images/suad.jpeg",
    ]);
});

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class,'tampildata']);

// Authentication routes
Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.attempt');
Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Protected mahasiswa routes
Route::middleware('auth')->group(function () {
    Route::get('/datamahasiswa', [MahasiswaController::class,'index'])->name('datamahasiswa');
Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('mahasiswa.tambah');
Route::post('/insertdata', [MahasiswaController::class, 'insertdata'])->name('insertdata');


Route::get('/tampildata/{id}',[MahasiswaController::class, 'tampildata'])->name('tampildata');

Route::post('/editdata/{id}',[MahasiswaController::class, 'editdata'])->name('editdata');

Route::get('/delete/{id}', [MahasiswaController::class, 'delete'])->name('mahasiswa.delete');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');