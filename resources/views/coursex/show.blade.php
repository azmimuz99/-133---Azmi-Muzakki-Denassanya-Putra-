@extends('layout/main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <div class="header" style="font-size: 24px;">
                      <h1>{{ $coursesx->title }}</h1>
                </div>
                <div class="container" style="font-size: 18px;">
                    <div class="course-description">
                        {!! $coursesx->desc !!}
                    </div>
                    @if($coursesx->category)
                        <p>Category: {{ $coursesx->category->name }}</p>
                    @endif
                </div>
                <div class="card-footer text-center">
                    @if($coursesx->id < 19)
                        <a href="/coursex/{{ $coursesx->id + 1 }}" class="btn btn-dark" style="font-size: 16px;">Lanjut ke tahap Selanjutnya</a>
                    @else
                        <a href="/quiz/{{ $coursesx->id }}" class="btn btn-success" style="font-size: 16px;">Kerjakan Quiz</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
