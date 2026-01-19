@extends('layouts.main')

@section('title', 'Tentang Kami')

@section('content')
<div style="background: linear-gradient(135deg, #E8F4F8 0%, #F5FAFE 50%, #FFFFFF 100%); padding: 100px 20px;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <h1 style="color: #0066CC; font-weight: 800; font-size: 2.5rem; margin-bottom: 20px;">
          ℹ️ Tentang Kami
        </h1>
        <p style="font-size: 1.1rem; color: #555555; line-height: 1.8; margin-bottom: 15px;">
          Kami adalah tim yang berfokus pada pengembangan teknologi web dan aplikasi modern dengan standar kualitas internasional.
        </p>
        <p style="font-size: 1.1rem; color: #555555; line-height: 1.8; margin-bottom: 15px;">
          Misi kami adalah menghadirkan inovasi yang bermanfaat untuk masyarakat Indonesia dan membantu bisnis berkembang melalui solusi digital yang tepat.
        </p>
        <p style="font-size: 1.1rem; color: #555555; line-height: 1.8;">
          Dengan pengalaman bertahun-tahun, kami telah membantu ratusan klien mencapai tujuan digital mereka.
        </p>
      </div>
      <div class="col-md-6">
        <div class="card shadow-lg" style="border: none;">
          <div class="card-body p-4">
            <h4 style="color: #0066CC; margin-bottom: 20px; font-weight: 700;">📌 Nilai-Nilai Kami</h4>
            <ul style="list-style: none; padding: 0;">
              <li style="margin-bottom: 12px; padding-left: 30px; position: relative;">
                <span style="position: absolute; left: 0; color: #0066CC; font-weight: bold;">✓</span>
                <strong>Inovasi:</strong> Selalu mencari solusi terbaik
              </li>
              <li style="margin-bottom: 12px; padding-left: 30px; position: relative;">
                <span style="position: absolute; left: 0; color: #0066CC; font-weight: bold;">✓</span>
                <strong>Kualitas:</strong> Standar kerja profesional
              </li>
              <li style="margin-bottom: 12px; padding-left: 30px; position: relative;">
                <span style="position: absolute; left: 0; color: #0066CC; font-weight: bold;">✓</span>
                <strong>Dedikasi:</strong> Komitmen penuh untuk kesuksesan Anda
              </li>
              <li style="padding-left: 30px; position: relative;">
                <span style="position: absolute; left: 0; color: #0066CC; font-weight: bold;">✓</span>
                <strong>Transparansi:</strong> Komunikasi terbuka dan jujur
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
