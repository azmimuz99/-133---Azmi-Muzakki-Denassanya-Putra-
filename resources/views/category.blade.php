
    @extends('layout\main')
    @section('container')
    <h1 class="mb-5">Kategori Course : {{$category}}</h1>
        @foreach ($courses as $course )
        <div class="col">
                <div class="card h-100">
                    <img src="{{ URL('images/'.$course->image) }}" class="img-fluid rounded-start" alt="">
                    <div class="card-body">
                        <h3 class="card-title">{{ $course->title }}</h3>
                        <p class="card-text">{{ $course->body }}</p>
                        <p class="card-text">
                            Disusun oleh: <a href="#" class="text-decoration-none">{{ $course->user->name }}</a> 
                            Kategori: <a href="/categories/{{ $course->category->slug }}" class="text-decoration-none">{{ $course->category->name }}</a>
                        </p>
                        <a href="/courses/{{ $course->slug }}" class="text-decoration-none btn btn-primary">Pelajari Course Ini</a>
                    </div>
                </div>
            </div>
        @endforeach
        
    @endsection 

