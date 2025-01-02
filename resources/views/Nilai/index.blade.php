@extends('layouts.app')

@section('content')
    <div class="container page-index mt-2">
        <div class="row">
            <div class="col">
                <h2 class="pb-2">Nilai Siswa</h2>
            </div>
            <div class="col-auto">
                <a class="btn-add btn btn-success" href="{{ route('nilai.create') }}">Tambah Nilai</a>
            </div>
        </div>
        <table class="table mt-2 table-striped">
            <thead>
                <tr class="">
                    <th class="text-center">No</th>
                    <th>Siswa</th>
                    <th>Mapel</th>
                    <th>Semester</th>
                    <th class="text-center">Nilai</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nilais as $nilai)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $nilai->student->nama_siswa }}</td>
                        <td>{{ $nilai->mapel->nama_pelajaran }}</td>
                        <td>{{ $nilai->semester }}</td>
                        <td class="text-center">{{ $nilai->nilai }}</td>
                        <td class="text-center">
                            <a href="{{ route('nilai.edit', $nilai->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('nilai.destroy', $nilai->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
