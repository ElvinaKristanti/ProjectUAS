<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        // Mengambil semua data siswa
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nim' => ['required', 'unique:students,nim'],
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'email' => ['required', 'email', 'unique:students,email'],
            'no_telp' => 'required',
        ], [
            'unique' => 'Data sudah ada.',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Simpan data siswa baru
        $student = new Student;
        $student->nim = $request->nim;
        $student->nama_siswa = $request->nama_siswa;
        $student->jenis_kelamin = $request->jenis_kelamin;
        $student->email = $request->email;
        $student->no_telp = $request->no_telp;
        $student->save();

        // Redirect ke halaman index
        return redirect()->route('students.index');
    }

    public function edit(string $id)
    {
        // Mengambil data siswa untuk diedit
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, string $id)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nim' => ['required', 'unique:students,nim,' . $id],
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'email' => ['required', 'email', 'unique:students,email,' . $id],
            'no_telp' => 'required',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update data siswa
        $student = Student::find($id);
        $student->nim = $request->nim;
        $student->nama_siswa = $request->nama_siswa;
        $student->jenis_kelamin = $request->jenis_kelamin;
        $student->email = $request->email;
        $student->no_telp = $request->no_telp;
        $student->save();

        // Redirect ke halaman index
        return redirect()->route('students.index');
    }

    public function destroy(string $id)
    {
        // Hapus data siswa
        Student::find($id)->delete();
        return redirect()->route('students.index');
    }
}
