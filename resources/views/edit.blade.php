@extends('layouts.main')

@section('content')
    <h1>Edit Data Mahasiswa</h1>
    <div class="card">
    <div class="card-body">
    <form action="/editdata/{{ $data['id'] }}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" value="{{ $data->nama }}" class="form-control">
  </div>
  <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nomor Induk (NIM)</label>
        <input type="number" name="nim" id="nim" value="{{ $data['nim'] }}" class="form-control">
  <div class="mb-3 form-check">
        <label for="exampleInputPassword1" class="form-label">Prodi</label>
        <input type="text" name="prodi" id="prodi" value="{{ $data['prodi'] }}" class="form-control">
  </div>
    <div class="mb-3 form-check">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="email" name="email" id="email" value="{{ $data['email'] }}" class="form-control">
        </div>
    <div class="mb-3 form-check">
        <label for="exampleInputPassword1" class="form-label">Nomor Handphone</label>
        <input type="number" name="nohp" id="nohp" value="{{ $data['nohp'] }}" class="form-control">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection