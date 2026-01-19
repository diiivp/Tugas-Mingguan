@extends('layouts.main')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2 class="mb-5 text-center" style="color: #0066CC; font-weight: 800; font-size: 2rem;">📧 Hubungi Kami</h2>
            
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Terjadi Kesalahan!</strong>
                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>✓ Sukses!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card shadow-lg" style="border: none;">
                <div class="card-body p-5">
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        
                        <div class="mb-4">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input 
                                type="text" 
                                class="form-control form-control-lg @error('name') is-invalid @enderror" 
                                id="name" 
                                name="name" 
                                value="{{ old('name') }}"
                                placeholder="Masukkan nama Anda"
                                required
                            >
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input 
                                type="email" 
                                class="form-control form-control-lg @error('email') is-invalid @enderror" 
                                id="email" 
                                name="email" 
                                value="{{ old('email') }}"
                                placeholder="Masukkan email Anda"
                                required
                            >
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input 
                                type="tel" 
                                class="form-control form-control-lg @error('phone') is-invalid @enderror" 
                                id="phone" 
                                name="phone" 
                                value="{{ old('phone') }}"
                                placeholder="Masukkan nomor telepon Anda"
                            >
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="subject" class="form-label">Subjek</label>
                            <input 
                                type="text" 
                                class="form-control form-control-lg @error('subject') is-invalid @enderror" 
                                id="subject" 
                                name="subject" 
                                value="{{ old('subject') }}"
                                placeholder="Masukkan subjek pesan"
                                required
                            >
                            @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea 
                                class="form-control form-control-lg @error('message') is-invalid @enderror" 
                                id="message" 
                                name="message" 
                                rows="6" 
                                placeholder="Tulis pesan Anda di sini"
                                required
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">✉️ Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 text-center mb-4">
                    <div class="card shadow border-0" style="transition: all 0.3s ease;">
                        <div class="card-body p-4">
                            <div style="font-size: 2.5rem; margin-bottom: 15px;">📍</div>
                            <h5 class="card-title mb-3" style="color: #0066CC; font-weight: 700;">Alamat</h5>
                            <p class="card-text text-muted">
                                Jl. Kedungmundu No.18<br>
                                Kec. Tembalang, Kota. Semarang<br>
                                Jawa Tengah, Indonesia
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center mb-4">
                    <div class="card shadow border-0" style="transition: all 0.3s ease;">
                        <div class="card-body p-4">
                            <div style="font-size: 2.5rem; margin-bottom: 15px;">📞</div>
                            <h5 class="card-title mb-3" style="color: #0066CC; font-weight: 700;">Telepon</h5>
                            <p class="card-text text-muted">
                                <a href="tel:+6212345678" class="text-decoration-none">+62 882 2665 5764</a><br>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center mb-4">
                    <div class="card shadow border-0" style="transition: all 0.3s ease;">
                        <div class="card-body p-4">
                            <div style="font-size: 2.5rem; margin-bottom: 15px;">✉️</div>
                            <h5 class="card-title mb-3" style="color: #0066CC; font-weight: 700;">Email</h5>
                            <p class="card-text text-muted">
                                <a href="mailto:info@example.com" class="text-decoration-none">sryoooadii@gmail.com</a><br>
                                <a href="mailto:support@example.com" class="text-decoration-none">suadgntng@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection