@extends('layouts.main')

@section('content')
<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <article class="card shadow-lg" style="border: none;">
        <div class="card-body p-5">
          <h1 class="mb-3" style="color: #0066CC; font-weight: 800;">{{ $new_berita["judul"] }}</h1>
          
          <p class="text-muted mb-4" style="font-style: italic; font-size: 0.95rem;">
            <strong>Penulis:</strong> {{ $new_berita["penulis"] }}
          </p>

          <hr style="border-color: #ADD8E6;">

          <div style="color: #333333; line-height: 1.8; font-size: 1.05rem;">
            {!! nl2br($new_berita["konten"]) !!}
          </div>

          <hr style="border-color: #ADD8E6; margin-top: 30px;">

          <div class="text-center mt-4">
            <a href="{{ url('/berita') }}" class="btn btn-primary">
              ← Kembali ke Berita
            </a>
          </div>
        </div>
      </article>
    </div>
  </div>
</div>
@endsection