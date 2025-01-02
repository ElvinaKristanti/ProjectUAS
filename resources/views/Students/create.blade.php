@extends('layouts.app')

@section('content')
    <div class="container w-75 mt-3 px-4 py-4 border border-dark-subtle">
        <h2 class="pb-4 text-center">Tambah Siswa</h2>
        <form class="row g-3 pt-3" action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="col-md-6">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" id="nim" required>
            </div>
            <div class="col-md-6">
                <label for="nama_siswa" class="form-label">Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control" id="nama_siswa" required>
            </div>
            <div class="col-md-6">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" required>
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="col-md-6">
                <label for="no_telp" class="form-label">No Telp</label>
                <input type="text" name="no_telp" class="form-control" id="no_telp" required>
            </div>
            <div class="col-12 d-flex justify-content-between mt-5">
                <a class="btn btn-outline-dark px-4" href="{{ route('students.index') }}">Kembali</a>
                <button type="submit" class="btn btn-primary px-4">Simpan</button>
            </div>
        </form>
    </div>
@endsection
