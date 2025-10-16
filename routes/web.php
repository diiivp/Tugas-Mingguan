<?php

use App\Models\Berita;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/datamahasiswa', [MahasiswaController::class, 'index']);

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});

