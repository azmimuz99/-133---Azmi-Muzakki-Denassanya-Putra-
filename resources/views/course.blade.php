
@extends('layout\main')


@section('container')
    @foreach ($courses as $course )
    
    <article> 
        <h2>
        <a href="/courses/{{ $course["slug"]}}">{{ $course["title"] }}</a>
        </h2>
        <h5> By:{{ $course["Teacher"] }}</h5>
        <p>{{ $course["body"] }}</p>
    </article>
    @endforeach
    
@endsection 

