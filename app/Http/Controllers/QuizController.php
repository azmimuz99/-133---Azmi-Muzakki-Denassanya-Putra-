<?php
// app/Http/Controllers/QuizController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuizController extends Controller
{
   
    public function showQuiz()
    {
        $question = Question::where('title', 'Kuis Gmail')->firstOrFail();
        return view('quiz.show', compact('question'));
    }

    public function submitQuiz(Request $request)
    {
        $question = Question::where('title', 'Kuis Gmail')->firstOrFail();
        $selectedAnswer = $request->input('answer');
        $correctAnswer = $question->correct_answer;

        if ($selectedAnswer === $correctAnswer) {
            return back()->with('success', 'Jawaban Anda benar!');
        } else {
            return back()->with('error', 'Jawaban Anda salah.');
        }
    }
}


