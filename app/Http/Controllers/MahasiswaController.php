<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Tambahkan fungsi index di bawah ini
    public function index()
    {
        // Contoh: mengembalikan teks sederhana untuk testing
        return "Berhasil memanggil fungsi index di MahasiswaController";
        
        // Atau jika ingin memanggil view:
        // return view('mahasiswa.index'); 
    }
}