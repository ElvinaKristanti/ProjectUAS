@extends('layouts.app')

@section('content')
    <div class="container w-75 mt-3 px-4 py-4 border border-dark-subtle">
        <h2 class="pb-4 text-center">Edit Nilai</h2>
        <form class="row g-3 pt-3" action="{{ route('nilai.update', $nilai->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Dropdown untuk Siswa -->
            <div class="col-md-12">
                <label for="student_id" class="form-label">Siswa</label>
                <select name="student_id" id="student_id" class="form-control" required>
                    <option value="">Pilih Siswa</option>
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}" {{ $student->id == $nilai->student_id ? 'selected' : '' }}>
                            {{ $student->nama_siswa }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Dropdown untuk Mata Pelajaran -->
            <div class="col-md-12">
                <label for="mapel_id" class="form-label">Mata Pelajaran</label>
                <select name="mapel_id" id="mapel_id" class="form-control" required>
                    <option value="">Pilih Mata Pelajaran</option>
                    @foreach ($mapels as $mapel)
                        <option value="{{ $mapel->id }}" {{ $mapel->id == $nilai->mapel_id ? 'selected' : '' }}>
                            {{ $mapel->nama_pelajaran }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Input Semester -->
            <div class="col-md-12">
                <label for="semester" class="form-label">Semester</label>
                <input type="text" name="semester" id="semester" class="form-control" value="{{ $nilai->semester }}" required>
            </div>

            <!-- Input Nilai -->
            <div class="col-md-12">
                <label for="nilai" class="form-label">Nilai</label>
                <input type="number" name="nilai" id="nilai" class="form-control" min="0" max="100" value="{{ $nilai->nilai }}" required>
            </div>

            <!-- Tombol Submit -->
            <div class="col-12 d-flex justify-content-between mt-5">
                <a href="{{ route('nilai.index') }}" class="btn btn-outline-dark px-4">Kembali</a>
                <button type="submit" class="btn btn-primary px-4">Update</button>
            </div>
        </form>
    </div>
@endsection
