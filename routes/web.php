<?php

use Illuminate\Support\Facades\Route;
use App\Models\Course;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Azmi Muzakki Denassanya Putra",
        "email" => "muzakkiazmi2408@gmail.com"
    ]);
});

Route::get('/course', function () {
    $courses = course::all();
    $title = 'course';
    return view('course', compact('courses', 'title'));
});

// Halaman Course 1
Route::get('/course1/{slug}', function ($slug) {
    $course = course::find($slug);
    if (!$course) {
        abort(404);
    }
   
    return view('course1', [
        "title" => "course pertama",
        "course" => $course
    ]);
});
