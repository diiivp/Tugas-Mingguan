<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display the about page with statistics and team information
     */
    public function index()
    {
        $about = About::first() ?? $this->getDefaultAbout();
        $team = TeamMember::where('is_active', true)
            ->orderBy('order')
            ->get();

        $statistics = [
            ['icon' => '👥', 'number' => '50+', 'label' => 'Tim Profesional'],
            ['icon' => '🏢', 'number' => '100+', 'label' => 'Klien Puas'],
            ['icon' => '⭐', 'number' => '4.9', 'label' => 'Rating'],
            ['icon' => '🚀', 'number' => '200+', 'label' => 'Proyek Selesai'],
        ];

        return view('about', [
            'title' => 'Tentang Kami',
            'about' => $about,
            'team' => $team,
            'statistics' => $statistics,
        ]);
    }

    /**
     * Get default about content
     */
    private function getDefaultAbout()
    {
        return (object) [
            'title' => 'Tentang Kami',
            'subtitle' => 'Membangun Masa Depan Digital Bersama',
            'description' => 'Kami adalah tim profesional yang berfokus pada pengembangan teknologi web dan aplikasi modern dengan standar kualitas internasional.',
            'vision' => 'Menjadi perusahaan teknologi terdepan yang menghadirkan inovasi berkelanjutan untuk kemajuan digital Indonesia.',
            'mission' => 'Memberikan solusi digital berkualitas tinggi, mendukung pertumbuhan bisnis klien, dan menciptakan dampak positif bagi masyarakat.',
            'team_intro' => 'Tim kami terdiri dari profesional berpengalaman dengan keahlian di berbagai bidang teknologi dan desain.',
        ];
    }
}
