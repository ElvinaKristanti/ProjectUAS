<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Student;
use App\Models\Mapel;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        // Mengambil semua data nilai
        $nilais = Nilai::with(['student', 'mapel'])->get();
        return view('nilai.index', compact('nilais'));
    }

    public function create()
    {
        // Ambil semua siswa dan mapel untuk dropdown
        $students = Student::all();
        $mapels = Mapel::all();
        return view('nilai.create', compact('students', 'mapels'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'mapel_id' => 'required|exists:mapels,id',
            'semester' => 'required|string',
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        // Simpan nilai
        Nilai::create([
            'student_id' => $request->student_id,
            'mapel_id' => $request->mapel_id,
            'semester' => $request->semester,
            'nilai' => $request->nilai,
        ]);

        return redirect()->route('nilai.index')->with('success', 'Data Nilai berhasil disimpan.');
    }

    public function edit($id)
    {
        // Ambil data nilai berdasarkan id
        $nilai = Nilai::findOrFail($id);
        $students = Student::all();
        $mapels = Mapel::all();

        return view('nilai.edit', compact('nilai', 'students', 'mapels'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'mapel_id' => 'required|exists:mapels,id',
            'semester' => 'required|string',
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        // Update data nilai
        $nilai = Nilai::findOrFail($id);
        $nilai->update([
            'student_id' => $request->student_id,
            'mapel_id' => $request->mapel_id,
            'semester' => $request->semester,
            'nilai' => $request->nilai,
        ]);

        return redirect()->route('nilai.index')->with('success', 'Data Nilai berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Hapus data nilai
        $nilai = Nilai::findOrFail($id);
        $nilai->delete();

        return redirect()->route('nilai.index')->with('success', 'Data Nilai berhasil dihapus.');
    }
}
