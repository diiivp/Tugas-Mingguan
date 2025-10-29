@extends('main')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Data Mahasiswa</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Email</th>
                <th>No. HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $mahasiswa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mahasiswa->name }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->prodi }}</td>
                    <td>{{ $mahasiswa->email }}</td>
                    <td>{{ $mahasiswa->nohp }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
