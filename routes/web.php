<?php

use App\Models\berita;
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

Route::get('/berita', function () {
    return view('berita', [
        "title" => "berita",
        "data_beritas" => berita::ambildata(),
    ]);
});

Route::get('/berita/{slug}', function ($slug) {
    $new_berita = berita::caridata($slug);

    if (empty($new_berita)) {
        abort(404);
    }

    return view('singleberita', [
        "title" => "Berita",
        "new_berita" => $new_berita,
    ]);
});

    foreach ($data_berita as $berita) 
    {
        if($berita['slug'] == $slug)
        {
            $new_berita = $berita; /// $berita => [judul,slug,penulis,konten]
        }
           
    }

    return view('singleberita',[
        "title" => "Berita",
        "new_berita" => $new_berita,
    ]);

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);

});