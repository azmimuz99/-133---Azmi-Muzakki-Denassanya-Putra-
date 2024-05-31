<?php
namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(Quiz $quiz)
    {
        return view('question.create', compact('quiz'));
    }
    
    public function show(Quiz $quiz)
    {
        $questions = $quiz->questions; 
        return view('question.show', [
            'quiz' => $quiz,
            'questions' => $questions,
            'title' => 'Kuis Excel'
        ]);
    }

    public function quiz2(Quiz $quiz)
    {
        $questions = $quiz->questions;
        // Pass the $quiz variable to the view
        return view('quiz2', [
            'quiz' => $quiz,
            'questions' => $questions,
            'title' => 'Kuis Word'
            
        ]);
    }
    

    public function quiz3(Quiz $quiz)
    {
        $questions = $quiz->questions;
         // Define the title variable
        return view('quiz3', [
            'quiz' => $quiz,
            'questions' => $questions,
            'title' => 'Kuis Power Point' // Pass the title variable to the view
        ]);
    }

    public function quiz4(Quiz $quiz)
    {
        $questions = $quiz->questions;
        $title = 'Kuis'; // Define the title variable
        return view('quiz4', [
            'quiz' => $quiz,
            'questions' => $questions,
            'title' => 'Kuis Gmail' // Pass the title variable to the view
        ]);
    }

    public function store(Request $request, Quiz $quiz)
    {
        $request->validate([
            'question' => 'required|string',
            'quiz_detail' => 'nullable|string',
            'option1' => 'required|string',
            'option2' => 'required|string',
            'option3' => 'nullable|string',
            'option4' => 'nullable|string',
            'correct_answer' => 'required|string',
            'score' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('question_images', 'public');
            $data['image'] = $imagePath;
        }

        $quiz->questions()->create($data);

        return redirect()->route('quizzes.show', $quiz->id)->with('success', 'Question added successfully.');
    }
}
