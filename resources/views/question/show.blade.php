@extends('layout.main')

@section('title', 'EduLedge | ' . $title)
<script src="js/quiz.js" defer></script> <!-- Path to your JS file -->
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $quiz->title }}</div>

                    <div class="card-body">
                        <h4>Questions:</h4>
                        <div id="quiz-container">
                            <form id="quiz-form">
                                @foreach($questions as $index => $question)
                                    <div class="question" data-correct="{{ $question->correct_answer }}">
                                        <p>{{ $question->question }}</p>
                                        <input type="radio" name="question{{ $index + 1 }}" value="option1"> {{ $question->option1 }}<br>
                                        <input type="radio" name="question{{ $index + 1 }}" value="option2"> {{ $question->option2 }}<br>
                                        <input type="radio" name="question{{ $index + 1 }}" value="option3"> {{ $question->option3 }}<br>
                                        <input type="radio" name="question{{ $index + 1 }}" value="option4"> {{ $question->option4 }}<br>
                                    </div>
                                @endforeach
                                <button type="button" id="submit-quiz">Submit</button>
                            </form>
                            <div id="result"></div>
                        </div>
                        <a href="/course" class="btn btn-dark">Kembali ke Course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
