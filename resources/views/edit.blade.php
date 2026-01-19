@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card shadow">
      <div class="card-body p-5">
        <h1 class="text-center mb-4" style="color: #0066CC; font-weight: 800;">✏️ Edit Data Mahasiswa</h1>
        
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

        <form action="/editdata/{{ $data['id'] }}" method="POST" enctype="multipart/form-data">
          @csrf
          
          <div class="mb-4">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" name="name" id="name" value="{{ $data['name'] }}" 
                   placeholder="Masukkan nama lengkap" class="form-control" required>
          </div>

          <div class="mb-4">
            <label for="nim" class="form-label">NIM (Nomor Induk Mahasiswa)</label>
            <input type="text" name="nim" id="nim" value="{{ $data['nim'] }}" 
                   placeholder="Masukkan NIM" class="form-control" required>
          </div>

          <div class="mb-4">
            <label for="prodi" class="form-label">Program Studi</label>
            <input type="text" name="prodi" id="prodi" value="{{ $data['prodi'] }}" 
                   placeholder="Masukkan program studi" class="form-control" required>
          </div>

          <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" value="{{ $data['email'] }}" 
                   placeholder="Masukkan email" class="form-control" required>
          </div>

          <div class="mb-4">
            <label for="nohp" class="form-label">Nomor HP</label>
            <input type="tel" name="nohp" id="nohp" value="{{ $data['nohp'] }}" 
                   placeholder="Masukkan nomor HP" class="form-control" required>
          </div>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary btn-lg">💾 Simpan Perubahan</button>
            <a href="/datamahasiswa" class="btn btn-secondary">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection