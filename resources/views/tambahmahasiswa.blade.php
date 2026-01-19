@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card shadow">
      <div class="card-body p-5">
        <h1 class="text-center mb-4">➕ Tambah Data Mahasiswa</h1>
        
        @if($errors->any())
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Terjadi Kesalahan!</strong>
            <ul class="mb-0 mt-2">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <form action="/insertdata" method="POST" enctype="multipart/form-data">
          @csrf
          
          <div class="mb-4">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" name="name" id="name" placeholder="Masukkan nama lengkap" 
                   class="form-control @error('name') is-invalid @enderror" 
                   value="{{ old('name') }}" required>
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-4">
            <label for="nim" class="form-label">NIM (Nomor Induk Mahasiswa)</label>
            <input type="text" name="nim" id="nim" placeholder="Masukkan NIM" 
                   class="form-control @error('nim') is-invalid @enderror" 
                   value="{{ old('nim') }}" required>
            @error('nim')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-4">
            <label for="prodi" class="form-label">Program Studi</label>
            <input type="text" name="prodi" id="prodi" placeholder="Masukkan program studi" 
                   class="form-control @error('prodi') is-invalid @enderror" 
                   value="{{ old('prodi') }}" required>
            @error('prodi')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" placeholder="Masukkan email" 
                   class="form-control @error('email') is-invalid @enderror" 
                   value="{{ old('email') }}" required>
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-4">
            <label for="nohp" class="form-label">Nomor HP</label>
            <input type="tel" name="nohp" id="nohp" placeholder="Masukkan nomor HP" 
                   class="form-control @error('nohp') is-invalid @enderror" 
                   value="{{ old('nohp') }}" required>
            @error('nohp')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary btn-lg">Simpan Data</button>
            <a href="/datamahasiswa" class="btn btn-secondary">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection