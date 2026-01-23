@extends('layouts.main')

@section('content')
<section class="hero">
	<div class="hero-inner">
		<h1 class="hero-title">Selamat Datang di WEB SUAD</h1>
		<p class="hero-subtitle">Platform berita, informasi dan manajemen data mahasiswa yang elegan, modern, dan mudah digunakan dengan desain yang profesional dan responsif.</p>
		<div class="hero-ctas">
			<a href="/datamahasiswa" class="btn btn-primary btn-lg">👥 Lihat Data Mahasiswa</a>
			<a href="/tambahmahasiswa" class="btn btn-secondary btn-lg">➕ Tambah Mahasiswa Baru</a>
		</div>
	</div>
</section>

<section class="container mt-5 mb-5">
	<h2 class="text-center mb-5" style="font-size: 2.5rem; font-weight: 800;">Fitur Utama Platform</h2>
	<div class="row">
		<div class="col-md-4 mb-4">
			<div class="card shadow fade-in" style="text-align: center; border: none; height: 100%;">
				<div style="background: linear-gradient(135deg, #1E3A8A 0%, #3B82F6 100%); padding: 2rem; border-radius: 12px 12px 0 0;">
					<div style="font-size: 3.5rem; color: white;">📰</div>
				</div>
				<div class="card-body p-4">
					<h5 class="card-title">Berita & Informasi</h5>
					<p class="card-text text-muted">Dapatkan informasi terbaru tentang berita, pengumuman, dan update penting lainnya</p>
					<a href="/berita" class="btn btn-primary btn-sm mt-3">Lihat Berita</a>
				</div>
			</div>
		</div>
		
		<div class="col-md-4 mb-4">
			<div class="card shadow fade-in" style="text-align: center; border: none; height: 100%;">
				<div style="background: linear-gradient(135deg, #1E3A8A 0%, #3B82F6 100%); padding: 2rem; border-radius: 12px 12px 0 0;">
					<div style="font-size: 3.5rem; color: white;">📞</div>
				</div>
				<div class="card-body p-4">
					<h5 class="card-title">Hubungi Kami</h5>
					<p class="card-text text-muted">Ada pertanyaan atau saran? Silakan hubungi kami melalui form kontak kami</p>
					<a href="/contact" class="btn btn-primary btn-sm mt-3">Hubungi</a>
				</div>
			</div>
		</div>
		
		<div class="col-md-4 mb-4">
			<div class="card shadow fade-in" style="text-align: center; border: none; height: 100%;">
				<div style="background: linear-gradient(135deg, #1E3A8A 0%, #3B82F6 100%); padding: 2rem; border-radius: 12px 12px 0 0;">
					<div style="font-size: 3.5rem; color: white;">ℹ️</div>
				</div>
				<div class="card-body p-4">
					<h5 class="card-title">Tentang Kami</h5>
					<p class="card-text text-muted">Pelajari lebih lanjut tentang visi, misi, dan tim profesional kami</p>
					<a href="/about" class="btn btn-primary btn-sm mt-3">Pelajari</a>
				</div>
			</div>
		</div>
	</div>
</section>

<style>
	.fade-in {
		animation: fadeIn 0.6s ease-out;
	}

	@keyframes fadeIn {
		from {
			opacity: 0;
			transform: translateY(20px);
		}
		to {
			opacity: 1;
			transform: translateY(0);
		}
	}

	.col-md-4:nth-child(1) {
		animation-delay: 0.1s;
	}

	.col-md-4:nth-child(2) {
		animation-delay: 0.2s;
	}

	.col-md-4:nth-child(3) {
		animation-delay: 0.3s;
	}
</style>
@endsection

