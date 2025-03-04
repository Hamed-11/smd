<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    // نمایش لیست همه دروس
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    // نمایش مشخصات یک درس خاص
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.show', compact('course'));
    }
}
