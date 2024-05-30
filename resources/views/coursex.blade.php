@extends('layout\main')

@section('container')

<div class="page-content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $course->title }}</h1>
            <p>by : GCFLearnFree <a href="/categories" class="text-decoration-none" style="color: black;"> Kategori: {{ $course->category->name }}</a></p>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    line-height: 1.6;
                    margin: 20px;
                }
                h1, h3, h3 {
                    color: #2c3e50;
                }
                ul {
                    list-style-type: none;
                    padding: 0;
                }
                li {
                    margin: 10px 0;
                    color:#2c3e50; /* Ensure text is black */
                    transition: font-size 0.3s; /* Add transition for smooth effect */
                    list-style-type: decimal;
                }
                li:hover {
                    font-size: 1.2em; /* Increase font size on hover */
                    color: #2c3e50; /* Ensure text remains black on hover */
                }
                li:before {
                    content: '• ';
                    color: #3498db;
                }
            </style>
            {!! $course->desc !!}
            <a class="btn btn-dark" href="/coursesx">Back to Course List</a>
        </div>
    </div>
</div>
@endsection
