<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories', ['categories' => $categories]);
    }

    public function show($category)
    {
        $category = Category::findOrFail($category);
        $courses = Course::where('category_id', $category)->get();
        return view('category.show', ['category' => $category, 'courses' => $courses]);
    }
}

