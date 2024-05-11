<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Models\Course;
use App\Models\category;

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

Route::get('/course', [CourseController::class, 'index']);

// Halaman Course 1
Route::get('/courses/{course:slug}', [CourseController::class, 'show']);

// Halaman Category
Route::get('/categories', [Category::class, 'index']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Course Categories',
        'categories' => Category::all(),
    ]);
});
// Halaman Course Category
Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
        'title' => $category->name,
        'courses' => $category->courses,
        'category' => $category->name,
    ]);
});

  
