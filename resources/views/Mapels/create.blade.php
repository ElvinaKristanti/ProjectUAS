@extends('layouts.app')

@section('content')
    <div class="container w-75 mt-3 px-4 py-4 border border-dark-subtle">
        <h2 class="pb-4 text-center">Tambah Pelajaran</h2>
        <form class="row g-3 pt-3" action="{{ route('mapels.store') }}" method="POST">
            @csrf
            <div class="col-md-6">
                <label for="kode_pelajaran" class="form-label">Kode Pelajaran</label>
                <input type="text" name="kode_pelajaran" class="form-control" id="kode_pelajaran" required>
            </div>
            <div class="col-md-6">
                <label for="nama_pelajaran" class="form-label">Nama Pelajaran</label>
                <input type="text" name="nama_pelajaran" class="form-control" id="nama_pelajaran" required>
            </div>
            <div class="col-12 d-flex justify-content-between mt-5">
                <a class="btn btn-outline-dark px-4" href="{{ route('mapels.index') }}">Kembali</a>
                <button type="submit" class="btn btn-primary px-4">Simpan</button>
            </div>
        </form>
    </div>
@endsection
