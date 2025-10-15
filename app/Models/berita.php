<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
        private static $data_berita = [
        [
            "judul" => "TI Berkemajuan",
            "slug" => "ti-berkemajuan",
            "penulis" => "Jack",
            "konten" => "Demon Slayer Menjadi Anime Terlaris Sepanjang Masa",
        ],
        [
            "judul" => "Teknologi Informasi",
            "slug"=> "teknologi-informasi",
            "penulis" => "Jono",
            "konten" => "Naruto Shippuden Tamat, Fans Sedih",
        ],
        [
            "judul" => "Hot News 3",
            "slug"=> "hot-news-3",
            "penulis" => "Nakime",
            "konten" => "Attack on Titan Season 4 Part 3 Rilis Tahun Ini",
        ],
    ];

    public static function ambildata()
    {
        return self::$data_berita;
    }

    public static function caridata($slug)
    {
       $data_beritas = self::$data_berita;

       $new_berita = [];

       foreach ($data_beritas as $berita) {
            if($berita['slug'] == $slug)
            {
                $new_berita = $berita;
        }
    }
