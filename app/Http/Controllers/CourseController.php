<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index() 
    
    {
        
        $course= Course::latest();
        // @dd(request('search'));
        if(request('search')) {
            $course->where('title','like','%'. request('search').'%');
        }
        return view('course', [
            "title" => "Course",
            "active" => 'courses',
            "courses" => $course->get()
        ]);
    }
    
    public function show(course $course)
    {
        return view('course1', [
            "title" => "Course Detail",
            "course" => $course
        ]);
    }
    
    
}
