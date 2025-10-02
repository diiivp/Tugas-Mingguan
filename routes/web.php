<?php

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
        "nohp" => "089999999909",
        "foto" => "images/adiganteng.jpg",
    ]);
});

Route::get('/berita', function () {

    $data_berita = [
        [
            "judul" => "Hot News 1",
            "penulis" => "Jack",
            "konten" => "Demon Slayer Menjadi Anime Terlaris Sepanjang Masa",
        ],
        [
            "judul" => "Hot News 2",
            "penulis" => "Jono",
            "konten" => "Naruto Shippuden Tamat, Fans Sedih",
        ],
        [
            "judul" => "Hot News 3",
            "penulis" => "Nakime",
            "konten" => "Attack on Titan Season 4 Part 3 Rilis Tahun Ini",
        ],
    ];
    return view('berita', [
        "title" => "berita",
        "berita" => $data_berita,
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});