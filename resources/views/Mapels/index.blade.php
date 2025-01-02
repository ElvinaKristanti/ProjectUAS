@extends('layouts.app')

@section('content')
    <div class="container page-index mt-2">
        <div class="row">
            <div class="col">
                <h2 class="pb-2">Data Pelajaran</h2>
            </div>
            <div class="col-auto">
                <a class="btn-add btn btn-success" href="{{ route('mapels.create') }}">Tambah Pelajaran</a>
            </div>
        </div>
        <table class="table mt-2 table-striped">
            <thead>
                <tr class="">
                    <th scope="col">Kode Mapel</th>
                    <th scope="col">Nama Pelajaran</th>
                    <th class="text-center" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mapels as $mapel)
                    <tr>
                        <td>{{ $mapel->kode_pelajaran }}</td>
                        <td>{{ $mapel->nama_pelajaran }}</td>
                        <td class="text-center">
                            <a href="{{ route('mapels.siswa', $mapel->id) }}" class="btn btn-sm btn-info">Nilai Siswa</a>
                            <a class="btn btn-sm btn-warning" href="{{ route('mapels.edit', $mapel->id) }}">Edit</a>
                            <form action="{{ route('mapels.destroy', $mapel->id) }}" method="POST" type="button"
                                class="btn btn-danger p-0" onsubmit="return confirm('Yakin Hapus Data ?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger m-0 border-0">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
