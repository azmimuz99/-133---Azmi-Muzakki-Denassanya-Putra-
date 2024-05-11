@extends('layout.main')

@section('styles')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f3f3f3;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        font-size: 36px;
        color: #333;
    }

    h3 {
        font-size: 28px;
        color: #333;
    }

    h5 {
        font-size: 22px;
        color: #666;
    }

    p {
        font-size: 18px;
        color: #666;
    }

    a {
        color: #1E90FF;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .back-link {
        display: inline-block;
        margin-top: 20px;
        font-size: 20px;
    }
</style>
@endsection

@section('container')
<div class="container">
    <h2>{{ $courses["title"] }}</h2>
    <p>by : GCFLearnFree in <a href="/categories/{{ $courses->category->slug }}"> {{ $courses->category->name  }}</a></p>
    <h5>{{ $courses["Teacher"] }}</h5>
    <ul>
        <li>
        {{ $courses["course_list"] }}
        </li>
    </ul>
    <a class="back-link" href="/course">Back to Course ></a>
</div>
@endsection
