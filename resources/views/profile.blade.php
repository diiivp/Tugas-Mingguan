@extends('layouts.main')

@section('content')
<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-lg">
        <div class="card-body p-5">
          <h1 class="text-center mb-5" style="color: #0066CC; font-weight: 800;">Profil Pembuat</h1>
          
          @if($foto)
            <div class="text-center mb-4">
              <img src="{{ $foto }}" alt="Foto Profil" class="rounded-circle" 
                   style="max-width: 200px; height: 200px; object-fit: cover; border: 4px solid #ADD8E6;">
            </div>
          @endif

          <div class="row mb-4">
            <div class="col-md-6 mb-3">
              <label class="form-label" style="color: #0066CC; font-weight: 700;">Nama</label>
              <p style="color: #333333; font-size: 1.1rem; padding: 10px; background-color: #F5FAFE; border-radius: 8px; border-left: 4px solid #ADD8E6;">
                {{ $nama }}
              </p>
            </div>
            
            @if($nohp)
              <div class="col-md-6 mb-3">
                <label class="form-label" style="color: #0066CC; font-weight: 700;">Nomor HP</label>
                <p style="color: #333333; font-size: 1.1rem; padding: 10px; background-color: #F5FAFE; border-radius: 8px; border-left: 4px solid #ADD8E6;">
                  {{ $nohp }}
                </p>
              </div>
            @endif
          </div>

          <div class="text-center mt-5">
            <a href="/" class="btn btn-primary">← Kembali ke Home</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection