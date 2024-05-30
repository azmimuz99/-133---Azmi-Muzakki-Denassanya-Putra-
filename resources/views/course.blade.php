@extends('layout\main')

@section('container')
<h1 class="mb-5">Pilihan Course</h1>
<style>
                                h1, h3, h3 {
                                    color: #2c3e50;
                                }
                                ul {
                                    list-style-type: none;
                                    padding: 0;
                                }
                                li {
                                    margin: 10px 0;
                                    color:#2c3e50; /* Pastikan teks berwarna hitam */
                                    transition: font-size 0.3s; /* Tambahkan transisi untuk efek halus */

                                }
                                li:hover {
                                    font-size: 1.2em; /* Perbesar ukuran font saat dihover */
                                    color: #2c3e50; /* Pastikan teks tetap hitam saat dihover */
                                }
                                li:before {
                                    content: "• ";
                                    color: #322C2B;
                                }
                                
            </style> 
    <div class="row float-right">
        <div class="col-md-6 text-right">
            <form action="/course">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-dark" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse ($courses as $course)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ URL('images/'.$course->image) }}" class="img-fluid rounded-start" alt="">
                    <div class="card-body">
                        <h3 class="card-title">{{$course->title}}</h3>
                        <p class="card-text">{{ $course->body }}</p>
                        <p class="card-text">
                            Disusun oleh: <a href="#" class="text-decoration-none">{{ $course->user->name }}</a> 
                            Kategori: <a href="/categories/{{ $course->category->slug }}" class="text-decoration-none">{{ $course->category->name }}</a>
                        </p>
                        <a href="/courses/{{ $course->slug }}" class="btn btn-dark">Pelajari Course Ini</a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center-fs-4">No Course Found</p>
        @endforelse
    </div>
@endsection
