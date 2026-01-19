@extends('layouts.main')

@section('content')
<section class="hero">
	<div class="hero-inner">
		<h1 class="hero-title">Selamat Datang di WEB SUAD</h1>
		<p class="hero-sub">Platform berita, informasi dan manajemen data mahasiswa yang elegan, modern, dan mudah digunakan dengan desain yang menyenangkan.</p>
		<p class="hero-ctas">
			<a href="/datamahasiswa" class="btn btn-primary btn-lg mr-2">👥 Lihat Data Mahasiswa</a>
			<a href="/tambahmahasiswa" class="btn btn-outline-light btn-lg">➕ Tambah Mahasiswa Baru</a>
		</p>
	</div>
</section>

<section class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md-4 mb-4">
			<div class="card shadow-lg" style="border: none; text-align: center;">
				<div class="card-body p-4">
					<div style="font-size: 3rem; margin-bottom: 15px;">📰</div>
					<h5 class="card-title" style="color: #0066CC; font-weight: 700;">Berita & Informasi</h5>
					<p class="card-text text-muted">Dapatkan informasi terbaru tentang berita dan informasi terupdate</p>
					<a href="/berita" class="btn btn-sm btn-primary">Lihat Berita</a>
				</div>
			</div>
		</div>
		
		<div class="col-md-4 mb-4">
			<div class="card shadow-lg" style="border: none; text-align: center;">
				<div class="card-body p-4">
					<div style="font-size: 3rem; margin-bottom: 15px;">📞</div>
					<h5 class="card-title" style="color: #0066CC; font-weight: 700;">Hubungi Kami</h5>
					<p class="card-text text-muted">Ada pertanyaan? Jangan ragu untuk menghubungi kami</p>
					<a href="/contact" class="btn btn-sm btn-primary">Hubungi</a>
				</div>
			</div>
		</div>
		
		<div class="col-md-4 mb-4">
			<div class="card shadow-lg" style="border: none; text-align: center;">
				<div class="card-body p-4">
					<div style="font-size: 3rem; margin-bottom: 15px;">ℹ️</div>
					<h5 class="card-title" style="color: #0066CC; font-weight: 700;">Tentang Kami</h5>
					<p class="card-text text-muted">Pelajari lebih lanjut tentang platform kami</p>
					<a href="/about" class="btn btn-sm btn-primary">Pelajari</a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection