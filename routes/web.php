<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;

// Home Page (does not require authentication)
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

// About Page (does not require authentication)
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Azmi Muzakki Denassanya Putra",
        "email" => "muzakkiazmi2408@gmail.com"
    ]);
});

// Course Index Page (requires authentication)
Route::get('/course', [CourseController::class, 'index'])->middleware('auth');

// Course Detail Page (requires authentication)
Route::get('/courses/{course:slug}', [CourseController::class, 'show'])->middleware('auth');

// Category Index Page (requires authentication)
Route::get('/categories', [CategoryController::class, 'index'])->middleware('auth');

// Category Detail Page (requires authentication)
Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->middleware('auth');

// Login Page (only accessible to guests)
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);

// Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Register Page (only accessible to guests)
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Dashboard Page (requires authentication)
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/coursex/{id}', [CoursexController::class, 'show'])->name('coursex.show');


Route::resource('quizzes', QuizController::class);
Route::get('quizzes/{quiz}/questions/create', [QuestionController::class, 'create'])->name('questions.create');
Route::get('/quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');
Route::get('quizzes/{quiz}/submit', [QuizController::class, 'submit'])->name('quizzes.submit');
Route::post('quizzes/{quiz}/calculate-score', [QuizController::class, 'calculateScore'])->name('quizzes.calculateScore');
Route::get('/question/{question}', [QuestionController::class, 'show'])->name('question.show');


// Route to list all quizzes
Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');



