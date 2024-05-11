@extends('layout.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"></div>
        <h1 class="mb-3">{{$courses->title}}</h1>
        <div class="container">
        <p>by : GCFLearnFree in <a href="/categories/{{ $courses->category->slug }}"> {{ $courses->category->name  }}</a></p>
        <h5>{{ $courses["Teacher"] }}</h5>
        <ul>
        <li>
        <img src="" alt="">
        {{ $courses["course_list"] }}
        </li>
        </ul>
        <a class="back-link" href="/course">Back to Course ></a>
    </div>
</div>

</div>
@endsection
