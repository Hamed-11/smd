<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مشخصات درس</title>
</head>
<body>
    <h2>مشخصات درس</h2>
    <p><strong>عنوان:</strong> {{ $course->title }}</p>
    <p><strong>توضیحات:</strong> {{ $course->description }}</p>
    <p><strong>مدت زمان:</strong> {{ $course->duration }} ساعت</p>
    <a href="{{ route('courses.index') }}">بازگشت به لیست دروس</a>
</body>
@extends('layouts.app')

@section('content')
<h2>درس: {{$course->title }}</h2>
<p>استاد: {{$course->teacher->name }}</p>
<h3>دانشجویان ثبت شده :</h3>
<ul>
    @foreach($course->students as $student)
    <li>{{ $student->name }}<li>
        @endforeach
</ul>
<h3>افزودن دانشجوی</h3>
<form action="{{ route('course.enroll',$course->id)}}" method="POST">
@csrf
<label>انتخاب دانشجو:</label>
<select name="user_id" required>
    @foreach($students as $student)
<option value="{{student->id}}">{{ $student->name }}</option>
@endforeach
</select>
<button type="submit">ثبت نام</button>
</form>
@endsection

</html>
