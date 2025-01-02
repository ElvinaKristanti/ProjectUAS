@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="pb-4">Mapel {{ $mapel->nama_pelajaran }}</h2>
        <button></button>

        @if($siswa->isEmpty())
            <p class="text-center">Tidak ada siswa yang memiliki nilai di mapel ini.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $index => $student)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $student->nama_siswa }}</td>
                            <td>
                                @foreach($student->nilai as $nilai)
                                    @if($nilai->mapel_id == $mapel->id)
                                        {{ $nilai->nilai }}
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
