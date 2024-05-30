@extends('layout.main')

@section('container')
    <h1 class="mb-5">Kategori Course</h1>
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
        .card-img-top {
            width: 100%;
            height: auto;
            max-height: 500px; /* Atur sesuai dengan kebutuhan Anda */
            object-fit: cover; /* Menjaga proporsi gambar */
        }
    </style> 
    @foreach ($categories as $category)
        <div class="card mb-3">
            <img src="{{ URL('images/'.$category->image) }}" class="card-img-top" alt="{{ $category->title }}">
            <div class="card-body">
                <h5 class="text-decoration-none-dark">{{ $category->title }}</h5>
                <div class="row justify-content-center"></div>
                <h2>
                    <a href="/categories/{{ $category->slug }}" class="text-decoration-none" style="color: black;">{{ $category->name }}</a>
                </h2>
                <a href="/categories/{{ $category->slug }}" class="text-decoration-none btn btn-dark">Pelajari Kategori Ini</a>
            </div>
        </div>
    @endforeach
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL('css/custom.css') }}">
@endsection
