@extends('layouts.app')

@section('content')
    <div class="container page-index mt-2">
        <div class="row">
            <div class="col">
                <h2 class="pb-2">Data Siswa</h2>
            </div>
            <div class="col-auto">
                <a class="btn-add btn btn-success" href="{{ route('students.create') }}">Tambah Siswa</a>
            </div>
        </div>
        <table class="table mt-2 table-striped">
            <thead>
                <tr class="">
                    <th class="text-center" scope="col">NIM</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Telp</th>
                    <th class="text-center" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td class="text-center">{{ $student->nim }}</td>
                        <td>{{ $student->nama_siswa }}</td>
                        <td>{{ $student->jenis_kelamin}}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->no_telp }}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-warning" href="{{ route('students.edit', $student->id) }}">Edit Siswa</a>

                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Yakin Hapus Data ?')">
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
