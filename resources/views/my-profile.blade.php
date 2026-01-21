@extends('layouts.main')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-4">
            <div class="card shadow-lg">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="fas fa-user-circle fa-5x" style="color: #0066CC;"></i>
                    </div>
                    <h3 class="mb-1" style="color: #0066CC; font-weight: 800;">{{ Auth::user()->name }}</h3>
                    <p class="text-muted mb-1">{{ Auth::user()->email }}</p>
                    <p class="text-muted small mb-4">
                        <strong>Role:</strong> 
                        <span class="badge @if(Auth::user()->role === 'admin') badge-danger @else badge-primary @endif">
                            {{ ucfirst(Auth::user()->role) }}
                        </span>
                    </p>

                    <a href="/edit-profile" class="btn btn-primary btn-block mb-2">
                        <i class="fas fa-edit"></i> Edit Profil
                    </a>
                    <a href="/datamahasiswa" class="btn btn-info btn-block">
                        <i class="fas fa-book"></i> Data Mahasiswa
                    </a>
                </div>
            </div>

            <!-- Account Info -->
            <div class="card shadow-lg mt-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="fas fa-info-circle"></i> Informasi Akun</h5>
                </div>
                <div class="card-body">
                    <p class="mb-2">
                        <strong>ID User:</strong> #{{ Auth::user()->id }}
                    </p>
                    <p class="mb-2">
                        <strong>Status:</strong> 
                        <span class="badge badge-success">Aktif</span>
                    </p>
                    <p class="mb-2">
                        <strong>Terdaftar:</strong> {{ Auth::user()->created_at->format('d M Y') }}
                    </p>
                    <p class="mb-0">
                        <strong>Terakhir Update:</strong> {{ Auth::user()->updated_at->format('d M Y H:i') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-8">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <!-- Profile Overview -->
            <div class="card shadow-lg mb-4">
                <div class="card-header bg-gradient" style="background: linear-gradient(135deg, #0066CC 0%, #ADD8E6 100%); color: white;">
                    <h4 class="mb-0"><i class="fas fa-id-card"></i> Profil Saya</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6 class="text-muted">Nama Lengkap</h6>
                            <p class="h5" style="color: #0066CC; font-weight: 600;">{{ Auth::user()->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">Email</h6>
                            <p class="h5" style="color: #0066CC; font-weight: 600;">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-muted">Role Akun</h6>
                            <p class="h5">
                                <span class="badge @if(Auth::user()->role === 'admin') badge-danger badge-lg @else badge-primary badge-lg @endif" style="font-size: 14px; padding: 8px 12px;">
                                    {{ ucfirst(Auth::user()->role) }}
                                </span>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">Status Akun</h6>
                            <p class="h5">
                                <span class="badge badge-success badge-lg" style="font-size: 14px; padding: 8px 12px;">
                                    Aktif
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="card shadow-lg">
                <div class="card-header bg-light">
                    <h5 class="mb-0"><i class="fas fa-cogs"></i> Aksi Cepat</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <a href="/edit-profile" class="btn btn-primary btn-block">
                                <i class="fas fa-edit"></i> Edit Profil
                            </a>
                        </div>
                        <div class="col-md-6 mb-2">
                            <a href="/datamahasiswa" class="btn btn-info btn-block">
                                <i class="fas fa-book"></i> Lihat Data Mahasiswa
                            </a>
                        </div>
                        <div class="col-md-6 mb-2">
                            @if(Auth::user()->role === 'admin' || true)
                                <a href="/tambahmahasiswa" class="btn btn-success btn-block">
                                    <i class="fas fa-plus"></i> Tambah Mahasiswa
                                </a>
                            @endif
                        </div>
                        <div class="col-md-6 mb-2">
                            <a href="/" class="btn btn-secondary btn-block">
                                <i class="fas fa-home"></i> Kembali ke Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.badge-lg {
    font-size: 14px !important;
    padding: 8px 12px !important;
}

.bg-gradient {
    background: linear-gradient(135deg, #0066CC 0%, #ADD8E6 100%);
}
</style>
@endsection
