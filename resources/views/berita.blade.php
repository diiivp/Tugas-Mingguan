@extends('layouts.main')

@section('content')
<div class="container mt-5 mb-5">
  <h1 class="text-center mb-5" style="color: #0066CC; font-weight: 800;">📰 Berita Terbaru</h1>
  
  <div class="row">
    @forelse($beritas as $berita)
      <div class="col-md-6 mb-4">
        <div class="card shadow-lg h-100" style="border: none; transition: all 0.3s ease;">
          <div class="card-body p-4">
            <a href="/berita/{{ $berita['slug'] }}" style="text-decoration: none;">
              <h4 class="card-title mb-3" style="color: #0066CC; font-weight: 700;">
                {{ $berita['judul'] }}
              </h4>
            </a>
            <p class="card-text text-muted mb-3">
              <strong>Penulis:</strong> {{ $berita['penulis'] }}
            </p>
            <p class="card-text" style="color: #555555;">
              {{ Str::limit($berita['konten'] ?? '', 150) }}
            </p>
            <a href="/berita/{{ $berita['slug'] }}" class="btn btn-primary btn-sm mt-3">
              Baca Selengkapnya →
            </a>
          </div>
        </div>
      </div>
    @empty
      <div class="col-12">
        <div class="alert alert-info text-center" role="alert">
          <p class="mb-0">Belum ada berita yang tersedia saat ini.</p>
        </div>
      </div>
    @endforelse
  </div>
</div>
@endsection