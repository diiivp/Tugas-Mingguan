<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
       private static $data_berita = [
        [
            "judul" => "Kopi Gratis Di Unimus",
            "slug" => "kopi-gratis-di-unimus",
            "penulis" => "Surya",
            "konten" => "Program Kopi Gratis Di Unimus Hanya Menunjukan KTM Saja",
        ],
        [
            "judul" => "Berita Makanan Gratis",
            "slug"=> "berita-makanan-gratis",
            "penulis" => "Adi",
            "konten" => "Program Makanan Gratis Di Unimus Hanya Menunjukan KTM Saja",
        ],
        [
            "judul" => "Teknologi Informasi Di Unimus Menjadi Prodi Terbaik Di Tahun 2025",
            "slug"=> "teknologi-informasi-diunimus-menjadi-prodi-terbaik-di-tahun-2025",
            "penulis" => "Suad",
            "konten" => "Prodi Teknlogoi Informasi Di Unimus Menjadi Prodi Terbaik Di Tahun 2025",
        ],
    ];

    public static function ambildata()
    {
        return Self:: $data_berita;
    }

    public static function caridata ($slug)
    {
        $data_beritas = Self:: $data_berita;

            $new_berita = [];
    foreach($data_beritas as $berita)
    {
        if ($berita["slug"] === $slug)
        {
            $new_berita = $berita;
        }
    }

    return $new_berita;

    }
}