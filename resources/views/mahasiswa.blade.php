@extends('layouts.main')

@section('title', 'Data Mahasiswa')

@section('content')
<style>
  .table {
    border-collapse: collapse;
  }
  
  .table thead th {
    border: 1px solid #0066CC;
    padding: 12px;
    text-align: center;
    background-color: #0066CC;
    color: white;
    font-weight: 700;
  }
  
  .table tbody td,
  .table tbody th {
    border: 1px solid #ADD8E6;
    padding: 12px;
    vertical-align: middle;
  }
  
  .table tbody tr:hover {
    background-color: #F5FAFE;
  }
  
  .table tbody tr {
    border-bottom: 1px solid #ADD8E6;
  }
</style>

<div class="content-panel card shadow">
  <h1 class="text-center mb-4">📊 Data Mahasiswa</h1>
  <div class="d-flex justify-content-between align-items-center mb-4">
    <a href="/tambahmahasiswa" class="btn btn-primary">
      <i class="fas fa-plus"></i> Tambah Data
    </a>
  </div>
  <div class="table-responsive">
    <table class="table table-hover mb-0">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Program Studi</th>
      <th scope="col">Email</th>
      <th scope="col">No. HP</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1 ?>
    @foreach ($data as $mahasiswa)
    <tr>
        <th scope="row">{{ $i }}</th>
        <td>{{ $mahasiswa["name"] }}</td>
        <td>{{ $mahasiswa["nim"] }}</td>
        <td>{{ $mahasiswa["prodi"] }}</td>
        <td>{{ $mahasiswa["email"] }}</td>
        <td>{{ $mahasiswa["nohp"] }}</td>
        <td>
            <a href="tampildata/{{ $mahasiswa['id'] }}" class="btn btn-sm btn-primary">Edit</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-danger btn-hapus" data-id="{{ $mahasiswa['id'] }}">Hapus</a>
        </td>
       
<?php $i++?>
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const btnHapus = document.querySelectorAll('.btn-hapus');
    
    btnHapus.forEach(function(btn) {
        btn.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            
            Swal.fire({
                title: "Konfirmasi Hapus",
                text: "Apakah Anda yakin ingin menghapus data ini?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                confirmButtonColor: '#0066CC',
                cancelButtonColor: '#666666'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/delete/' + id;
                }
            });
        });
    });
});
</script>
@endsection