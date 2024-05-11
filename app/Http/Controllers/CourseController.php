<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class CourseController extends Controller
{
    public function index() 
    {
        return view('course', [
            "title" => "PIlihan Course",
            // "courses" => course::all() // Correct usage of the all() method
            "courses" => course::latest()->get()
        ]);  
    }

    public function show(course $course)
    {
        return view('course1', [
            "title" => "course",
            "courses" => $course
        ]);
    }
}
