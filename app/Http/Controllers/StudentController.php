<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {
        return response()->json(Student::all());
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nim' => 'required|unique:students',
            'name' => 'required|string',
            'major' => 'required|string',
            'batch_year' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $student = Student::create($request->all());
        return response()->json($student, 201);
    }

    public function show($id)
    {
        $student = Student::find($id);
        if (!$student) {
            return response()->json(['message' => 'Mahasiswa tidak ditemukan'], 404);
        }
        return response()->json($student);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|string|unique:students,nim,' . $id,
            'name' => 'required|string',
            'major' => 'required|string',
            'batch_year' => 'required|integer'
        ]);

        $student = Student::find($id);
        if (!$student) {
            return response()->json(['message' => 'Mahasiswa tidak ditemukan'], 404);
        }

        $student->update($request->all());
        return response()->json($student);
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        if (!$student) {
            return response()->json(['message' => 'Mahasiswa tidak ditemukan'], 404);
        }

        $student->delete();
        return response()->json(['message' => 'Data mahasiswa berhasil dihapus']);
    }
}