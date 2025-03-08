<!DOCTYPE html>
<html lang="fa">

@extends('layouts.app')
@section('content')
<h2>افزودن درس جدید </h2>
<form action="{{ route('courses.store') }}" method="POST">
    @csrf
    <lable>نام درس :</label>
    <input type="text" name="title" required>
    <lable>انتخاب استاد :</label>
    <select name="teacher_id" required>
        @foreach($teachers as teacher)
        <option value="{{ $teacher->id }}">{{ $teache->name }}</option>
        @endforeach
</select>
<button type="submit">افزودن</button>
</form>
@endforeach
</html>
