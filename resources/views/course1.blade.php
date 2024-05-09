@extends('layout.main')

@section('container')
@foreach ($courses as $course)
<article>
    <h2>{{ $course["title"] }}</h2>
    <h5>{{ $course["Teacher"] }}</h5>
    <p>{{ $course["body"] }}</p>
</article>
@endforeach

<a href="/course">Back to Course ></a>
@endsection
