<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Mapel;

class MapelController extends Controller
{
    public function index()
    {
        // Mengambil semua data pelajaran
        $mapels = Mapel::all();
        return view('mapels.index', compact('mapels'));
    }

    // App\Http\Controllers\MapelController.php

    public function showSiswa($id)
    {
        // Ambil mapel berdasarkan ID
        $mapel = Mapel::findOrFail($id);

        // Ambil semua siswa yang memiliki nilai di mapel tersebut
        $siswa = $mapel->nilai()->with('student')->get()->pluck('student');

        // Tampilkan data siswa
        return view('mapels.views_nilai', compact('siswa', 'mapel'));
    }


    public function create()
    {
        return view('mapels.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'kode_pelajaran' => ['required', 'unique:mapels,kode_pelajaran'],
            'nama_pelajaran' => 'required',
        ], [
            'unique' => 'Data sudah ada.',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Simpan data pelajaran baru
        $mapel = new Mapel;
        $mapel->kode_pelajaran = $request->kode_pelajaran;
        $mapel->nama_pelajaran = $request->nama_pelajaran;
        $mapel->save();

        // Redirect ke halaman index
        return redirect()->route('mapels.index');
    }

    public function edit(string $id)
    {
        // Mengambil data pelajaran untuk diedit
        $mapel = Mapel::findOrFail($id);
        return view('mapels.edit', compact('mapel'));
    }

    public function update(Request $request, string $id)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'kode_pelajaran' => ['required', 'unique:mapels,kode_pelajaran,' . $id],
            'nama_pelajaran' => 'required',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update data pelajaran
        $mapel = Mapel::find($id);
        $mapel->kode_pelajaran = $request->kode_pelajaran;
        $mapel->nama_pelajaran = $request->nama_pelajaran;
        $mapel->save();

        // Redirect ke halaman index
        return redirect()->route('mapels.index');
    }

    public function destroy(string $id)
    {
        // Hapus data pelajaran
        Mapel::find($id)->delete();
        return redirect()->route('mapels.index');
    }
}
