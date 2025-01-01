@extends('layouts.app')

@section('content')
    <div class="container w-75 mt-3 px-4 py-4 border border-dark-subtle">
        <h2 class="pb-4 text-center">Edit Siswa</h2>
        <form class="row g-3 pt-3" action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" id="nim"
                    value="{{ old('nim', $student->nim) }}" readonly>
            </div>
            <div class="col-md-6">
                <label for="nama_siswa" class="form-label">Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control" id="nama_siswa"
                    value="{{ old('nama_siswa', $student->nama_siswa) }}" required>
            </div>
            <div class="col-md-6">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" required>
                    <option value="Laki-laki"
                        {{ old('jenis_kelamin', $student->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-Laki
                    </option>
                    <option value="Perempuan"
                        {{ old('jenis_kelamin', $student->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan
                    </option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email"
                    value="{{ old('email', $student->email) }}" required>
            </div>
            <div class="col-md-6">
                <label for="no_telp" class="form-label">No Telp</label>
                <input type="text" name="no_telp" class="form-control" id="no_telp"
                    value="{{ old('no_telp', $student->no_telp) }}" required>
            </div>
            <div class="col-12 d-flex justify-content-between mt-5">
                <a class="btn btn-outline-dark px-4" href="{{ route('students.index') }}">Kembali</a>
                <button type="submit" class="btn btn-primary px-4">Update</button>
            </div>
        </form>
    </div>
@endsection
