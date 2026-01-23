<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\TeamMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat data About
        About::create([
            'title' => 'Tentang Kami',
            'subtitle' => 'Membangun Masa Depan Digital Bersama',
            'description' => 'Kami adalah tim profesional yang berfokus pada pengembangan teknologi web dan aplikasi modern dengan standar kualitas internasional. Dengan pengalaman bertahun-tahun, kami telah membantu ratusan klien mencapai tujuan digital mereka.',
            'vision' => 'Menjadi perusahaan teknologi terdepan yang menghadirkan inovasi berkelanjutan untuk kemajuan digital Indonesia.',
            'mission' => 'Memberikan solusi digital berkualitas tinggi, mendukung pertumbuhan bisnis klien, dan menciptakan dampak positif bagi masyarakat.',
            'team_intro' => 'Tim kami terdiri dari profesional berpengalaman dengan keahlian di berbagai bidang teknologi dan desain.',
        ]);

        // Buat data Tim
        $teamMembers = [
            [
                'name' => 'Budi Santoso',
                'position' => 'Chief Executive Officer',
                'bio' => 'Pemimpin visioner dengan pengalaman 15+ tahun di industri teknologi.',
                'email' => 'budi@example.com',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Siti Nurhaliza',
                'position' => 'Chief Technology Officer',
                'bio' => 'Expert dalam arsitektur sistem dan pengembangan teknologi terdepan.',
                'email' => 'siti@example.com',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Ahmad Wijaya',
                'position' => 'Lead Developer',
                'bio' => 'Pengembang berpengalaman dengan spesialisasi dalam Full Stack Development.',
                'email' => 'ahmad@example.com',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Rini Puspita',
                'position' => 'UI/UX Designer',
                'bio' => 'Desainer kreatif yang menciptakan pengalaman pengguna yang luar biasa.',
                'email' => 'rini@example.com',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Fajar Pratama',
                'position' => 'Project Manager',
                'bio' => 'Profesional manajemen proyek dengan track record kesuksesan yang terbukti.',
                'email' => 'fajar@example.com',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Dewi Lestari',
                'position' => 'Quality Assurance Lead',
                'bio' => 'Ahli QA dengan dedikasi terhadap kualitas dan keandalan produk.',
                'email' => 'dewi@example.com',
                'order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($teamMembers as $member) {
            TeamMember::create($member);
        }
    }
}
