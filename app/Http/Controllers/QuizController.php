<?php
namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all(); // Fetch all quizzes
        return view('quizzes.show', compact('quizzes')); // Pass quizzes to the view
    }

    public function show(Quiz $quiz)
    {
        return view('quizzes.show', compact('quiz'));
    }
    public function showQuiz()
    {
        $user = Auth::user();
        return view('quiz', compact('user'));
    }
}

