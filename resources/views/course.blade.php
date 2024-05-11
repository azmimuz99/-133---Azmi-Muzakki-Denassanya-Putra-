
@extends('layout\main')
@section('container')
<h1 class="mb-5">{{$title}}</h1>
@if ($courses->count())
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
        <img src="{{ URL('images/rubaitul-azad-GauA0hiEwDk-unsplash.jpg') }}" class="img-fluid rounded-start" alt="">
      <div class="card-body">
      <h3 class="card-title">{{ $courses[0]->title }}</h3>
        <p class="card-text">{{ $courses[0]->body}}</p>
        <p class="card-text"><p> Disusun oleh: <a href="#"class="text-decoration-none">{{ $courses[0]->user->name }}</a> Kategori: <a href="/categories/{{ $courses[0]->category->slug }}" class="text-decoration-none"> {{ $courses[0]->category->name  }}</a></p></p>
        <a href="/courses/{{ $courses[0]->slug }}" class="text-decoration-none btn btn-primary">Pelajari Course Ini</a>
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="{{ URL('images/rubaitul-azad-A6SchWHvyVY-unsplash.jpg') }}" class="img-fluid rounded-start" alt="">
      <div class="card-body">
      <h3 class="card-title">{{ $courses[1]->title }}</h3>
        <p class="card-text">{{ $courses[1]->body}}</p>
        <p class="card-text"><p> Disusun oleh: <a href="#"class="text-decoration-none">{{ $courses[1]->user->name }}</a> Kategori: <a href="/categories/{{ $courses[1]->category->slug }}" class="text-decoration-none"> {{ $courses[1]->category->name  }}</a></p></p>
        <a href="/courses/{{ $courses[1]->slug }}" class="text-decoration-none btn btn-primary">Pelajari Course Ini</a>
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="{{ URL('images/rubaitul-azad-gOuM56LjP2c-unsplash.jpg') }}" class="img-fluid rounded-start" alt="">
      <div class="card-body">
      <h3 class="card-title">{{ $courses[2]->title }}</h3>
        <p class="card-text">{{ $courses[2]->body}}</p>
        <p class="card-text"><p> Disusun oleh: <a href="#"class="text-decoration-none">{{ $courses[2]->user->name }}</a> Kategori: <a href="/categories/{{ $courses[2]->category->slug }}" class="text-decoration-none"> {{ $courses[2]->category->name  }}</a></p></p>
        <a href="/courses/{{ $courses[2]->slug }}" class="text-decoration-none btn btn-primary">Pelajari Course Ini</a>
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="{{ URL('images/rubaitul-azad-W3Z2ZNs1y4I-unsplash.jpg') }}" class="img-fluid rounded-start" alt="">
      <div class="card-body">
      <h3 class="card-title">{{ $courses[3]->title }}</h3>
        <p class="card-text">{{ $courses[3]->body}}</p>
        <p class="card-text"><p> Disusun oleh: <a href="#"class="text-decoration-none">{{ $courses[3]->user->name }}</a> Kategori: <a href="/categories/{{ $courses[3]->category->slug }}" class="text-decoration-none"> {{ $courses[3]->category->name  }}</a></p></p>
        <a href="/courses/{{ $courses[3]->slug }}" class="text-decoration-none btn btn-primary">Pelajari Course Ini</a>
    </div>
    </div>
  </div>
</div>
@else 
<p class="text-center-fs-4">No Course Found</p>

@endif

    @foreach ($courses->skip(4) as $course )
    
    <article class="mb-5 border-bottom"> 
        <h2>
        <a href="/courses/{{ $course->slug }}" class="text-decoration-none">{{ $course->title }}</a>
        </h2>
        <h5> Disusun oleh: <a href="#"class="text-decoration-none">{{ $course->user->name }}</a></h5>
        <p>{{ $course->body}}</p>   
    </article>
    @endforeach
    
@endsection 

