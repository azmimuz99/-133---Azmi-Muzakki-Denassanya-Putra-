@extends('layout.main')

@section('container')
<div class="page-content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $course->title }}</h1>
            <p>by : GCFLearnFree <a href="/categories" class="text-decoration-none" style="color: black;">Kategori: {{ $course->category->name }}</a></p>
            <style>
                h1, h3 {
                    color: #2c3e50;
                }
                ul {
                    list-style-type: none;
                    padding: 0;
                }
                li {
                    margin: 10px 0;
                    color: #2c3e50;
                    transition: font-size 0.3s;
                }
                li:hover {
                    font-size: 1.2em;
                    color: #2c3e50;
                }
                li:before {
                    content: "• ";
                    color: #322C2B;
                }
            </style>
            <p>{!! $course->course_list !!}</p>
            <h3>Kuis</h3>
                            <ul>
                                <li><a href="/question/1" class="text-decoration-none" style="color: black;">Kuis Excel</a><br><small>Uji pengetahuan Anda tentang Excel dengan mengikuti kuis kami.</small></li>
                            </ul>',
            <a class="btn btn-dark" href="/course">Back to Course</a>
        </div>
    </div>
</div>
@endsection
