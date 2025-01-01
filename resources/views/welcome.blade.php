@extends('layouts.app')

@section('content')
    <div class="dataku mt-5">
        <div class="container w-50 py-4 px-4 rounded-4">
            <div class="row align-items-center">
                <div class="col-3">
                    {{-- <img class="w-100 rounded-circle" src="{{ Vite::asset('resources/images/foto.jpeg') }}" alt=""> --}}
                </div>
                <div class="col-9">
                    <h5 class="mb-0">Mimin</h5>
                    <p>Indonesia</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mt-3">
                    <p class="mb-0">Nama :</p>
                    <h4 class=" fw-normal">Nur Khamidah</h4>
                </div>
                <div class="col-6 mt-3">
                    <p class="mb-0">Tanggal Lahir :</p>
                    <h4 class=" fw-normal">Surabaya, 07 Januari 2004</h4>
                </div>

                <div class="col-6 mt-3">
                    <p class="mb-0">Keterangan :</p>
                    <h4 class=" fw-normal">Mahasiswa aktif prodi sistem informasi,Telkom University Surabaya</h4>
                </div>

                <div class="col-6 mt-3">
                    <p class="mb-0">Instagram :</p>
                    <h4 class=" fw-normal">@vinawijanarko_</h4>
                </div>

            </div>
        </div>
    </div>
@endsection
