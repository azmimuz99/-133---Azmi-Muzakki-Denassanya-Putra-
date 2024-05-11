<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class CourseController extends Controller
{
    public function index() 
    {
        return view('course', [
            "title" => "courses",
            "courses" => course::all() // Correct usage of the all() method
        ]);  
    }

    public function show(course $course)
    {
        return view('course1', [
            "title" => "course pertama",
            "courses" => $course
        ]);
    }
}
