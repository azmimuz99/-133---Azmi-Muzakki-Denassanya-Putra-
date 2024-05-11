
@extends('layout\main')


@section('container')
    @foreach ($courses as $course )
    
    <article class="mb-5 border-bottom"> 
        <h2>
        <a href="/courses/{{ $course->slug }}" class="text-decoration-none">{{ $course->title }}</a>
        </h2>
        <h5> Disusun oleh: <a href="#"class="text-decoration-none">{{ $course->user->name }}</a></h5>
        <p>{{ $course->body}}</p>
    </article>
    @endforeach
    
@endsection 

