<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           DB::table('mahasiswa')->insert([
            'name' => "Syaiful Maarif",
            'nim' => 132424,
            'prodi' => "Teknik Informatika",
            'email' => "syaiful@gmail.com",
            'nohp' => 1234567890,
        ]);
    }
}
