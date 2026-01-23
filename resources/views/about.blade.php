@extends('layouts.main')

@section('title', 'Tentang Kami')

@section('content')
<style>
    .gradient-header {
        background: linear-gradient(135deg, #0066CC 0%, #0080FF 100%);
        color: white;
        padding: 100px 20px;
        position: relative;
        overflow: hidden;
    }

    .gradient-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,144C960,149,1056,139,1152,128C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat bottom;
        background-size: cover;
        opacity: 0.1;
    }

    .gradient-header h1 {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
    }

    .gradient-header p {
        font-size: 1.3rem;
        margin-bottom: 0;
        position: relative;
        z-index: 1;
        opacity: 0.95;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: #333;
        margin-bottom: 50px;
        text-align: center;
        position: relative;
        padding-bottom: 30px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #0066CC, #0080FF);
        border-radius: 2px;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }

    .value-card {
        background: white;
        padding: 30px;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
    }

    .value-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 102, 204, 0.2);
    }

    .value-icon {
        font-size: 3rem;
        margin-bottom: 15px;
    }

    .value-card h4 {
        color: #0066CC;
        font-weight: 700;
        margin-bottom: 15px;
        font-size: 1.3rem;
    }

    .value-card p {
        color: #666;
        line-height: 1.6;
    }

    @media (max-width: 768px) {
        .gradient-header h1 {
            font-size: 2rem;
        }

        .section-title {
            font-size: 1.8rem;
        }
    }
</style>

<!-- Header Hero -->
<div class="gradient-header">
    <div class="container" style="position: relative; z-index: 1;">
        <h1>Tentang Kami</h1>
        <p>{{ $about->subtitle ?? 'Membangun Masa Depan Digital Bersama' }}</p>
    </div>
</div>

<!-- Nilai-Nilai Kami -->
<div class="container" style="padding: 100px 20px;">
    <h2 class="section-title">Nilai-Nilai Kami</h2>

    <div class="values-grid">
        <div class="value-card">
            <div class="value-icon">💡</div>
            <h4>Inovasi</h4>
            <p>Kami selalu mencari cara baru dan lebih baik untuk menyelesaikan masalah dengan teknologi terkini.</p>
        </div>

        <div class="value-card">
            <div class="value-icon">⭐</div>
            <h4>Kualitas</h4>
            <p>Setiap proyek dikerjakan dengan standar profesional tertinggi dan perhatian terhadap detail.</p>
        </div>

        <div class="value-card">
            <div class="value-icon">🤝</div>
            <h4>Dedikasi</h4>
            <p>Kami berkomitmen penuh untuk kesuksesan Anda dengan dukungan dan layanan terbaik.</p>
        </div>

        <div class="value-card">
            <div class="value-icon">🔍</div>
            <h4>Transparansi</h4>
            <p>Komunikasi terbuka dan jujur adalah fondasi hubungan kami dengan setiap klien.</p>
        </div>

        <div class="value-card">
            <div class="value-icon">🌱</div>
            <h4>Keberlanjutan</h4>
            <p>Kami peduli terhadap dampak lingkungan dan sosial dari setiap keputusan bisnis kami.</p>
        </div>

        <div class="value-card">
            <div class="value-icon">🏆</div>
            <h4>Keunggulan</h4>
            <p>Kami terus belajar dan berkembang untuk memberikan hasil yang luar biasa setiap waktu.</p>
        </div>
    </div>
</div>

@endsection
