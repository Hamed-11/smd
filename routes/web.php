<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
use App\Http\Controllers\MyController;

Route::get('/my-page', [MyController::class, 'showView']);

use App\Http\Controllers\CourseController;

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');

use App\Http\Controllers\CourseController;

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
Route::post('/courses/{id}/enroll', [CourseController::class, 'enroll'])->name('courses.enroll');


?>
