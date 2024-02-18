@extends('wiki.main')

@section('title', $wiki->title)

@section('content')

    <div class="card">
        <div class="card-head"></div>
        <div class="card-body">
            <h1>{{ $wiki->title }}</h1>
            <p>{!! $wiki->body !!}</p>

        </div>
    </div>
@endsection
