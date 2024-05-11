
@extends('layout\main')
@section('container')
<h1 class="mb-5">Kategori Course : {{$category}}</h1>
    @foreach ($courses as $course )
    <article> 
        <h2>
        <a href="/categories/{{ $course->slug }}"class="text-decoration-none">{{ $course->title }}</a>
        </h2>
        <h5> Disusun oleh: EduAdmin{{ $course["Teacher"] }}</h5>
        <p>{{ $course->body}}</p>
    </article>
    @endforeach
    
@endsection 

