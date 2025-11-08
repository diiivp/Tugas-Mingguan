@extends('layouts.main')

@section('content')
    <h1 class="text-center mb-4">Data Mahasiswa</h1>
    <a href="/tambahmahasiswa">
      <button type="button" class="btn btn-success mb-3">Tambah Data</button>
    </a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
    @endif
      <table class="table">
    <div class="row">
        <div class="col-md-12">

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Email</th>
                        <th scope="col">No. HP</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach ($data as $mahasiswa)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $mahasiswa ["name"] }}</td>
                            <td>{{ $mahasiswa ["nim"] }}</td>
                            <td>{{ $mahasiswa ["prodi"] }}</td>
                            <td>{{ $mahasiswa ["email"] }}</td>
                            <td>{{ $mahasiswa ["nohp"] }}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
