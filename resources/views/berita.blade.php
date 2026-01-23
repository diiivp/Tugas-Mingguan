@extends('layouts.main')

@section('content')
<style>
  .news-header {
    background: linear-gradient(135deg, #1E3A8A 0%, #3B82F6 100%);
    color: white;
    padding: 3rem 0;
    margin-bottom: 2rem;
  }

  .news-header h1 {
    color: white;
    font-weight: 800;
    font-size: 2.5rem;
    margin: 0;
  }

  .news-card {
    overflow: hidden;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: none;
    border-radius: 12px;
  }

  .news-card:hover {
    box-shadow: 0 20px 50px rgba(30, 58, 138, 0.2);
    transform: translateY(-8px);
  }

  .news-card-header {
    background: linear-gradient(135deg, #EFF6FF 0%, #F0F9FF 100%);
    padding: 1.5rem;
    border-bottom: 2px solid #BFDBFE;
  }

  .news-card-body {
    padding: 1.5rem;
  }

  .news-title {
    color: #1E3A8A;
    font-weight: 700;
    line-height: 1.4;
    margin-bottom: 1rem;
    transition: color 0.3s ease;
  }

  .news-card:hover .news-title {
    color: #3B82F6;
  }

  .news-meta {
    color: #6B7280;
    font-size: 0.9rem;
    font-weight: 600;
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
  }

  .news-excerpt {
    color: #4B5563;
    line-height: 1.7;
    margin-bottom: 1rem;
  }

  .read-more-btn {
    display: inline-block;
    transition: all 0.3s ease;
  }

  .read-more-btn:hover {
    transform: translateX(4px);
  }
</style>

<div class="news-header">
  <div class="container">
    <h1>📰 Berita Terbaru</h1>
    <p style="color: rgba(255, 255, 255, 0.9); margin-top: 0.5rem;">Tetap update dengan informasi terbaru dan terpenting</p>
  </div>
</div>

<div class="container mt-5 mb-5">
  <div class="row">
    @forelse($beritas as $berita)
      <div class="col-md-6 mb-4">
        <div class="card news-card shadow h-100">
          <div class="news-card-header">
            <h4 class="news-title">
              <a href="/berita/{{ $berita['slug'] }}" style="color: inherit; text-decoration: none;">
                {{ $berita['judul'] }}
              </a>
            </h4>
            <div class="news-meta">
              <span style="display: flex; align-items: center; gap: 0.3rem;">
                ✍️ {{ $berita['penulis'] }}
              </span>
            </div>
          </div>
          <div class="news-card-body">
            <p class="news-excerpt">
              {{ Str::limit($berita['konten'] ?? '', 150) }}
            </p>
            <a href="/berita/{{ $berita['slug'] }}" class="btn btn-primary btn-sm read-more-btn">
              Baca Selengkapnya →
            </a>
          </div>
        </div>
      </div>
    @empty
      <div class="col-12">
        <div class="alert alert-info" role="alert" style="text-align: center; font-weight: 500;">
          <p class="mb-0">📌 Belum ada berita yang tersedia saat ini.</p>
        </div>
      </div>
    @endforelse
  </div>
</div>
@endsection