<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // نمایش لیست دانشجویان
    public function index()
    {
        $students = Student::all();
        return response()->json($students);
    }

    // ثبت دانشجوی جدید
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'course' => 'required',
            'teacher' => 'required'
        ]);

        $student = Student::create($request->all());
        return response()->json($student, 201);
    }

    // حذف دانشجو
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return response()->json(['message' => 'دانشجو حذف شد!']);
    }
}
