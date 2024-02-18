@extends('wiki.main')

@section('title', $title)

@section('content')

    <div class="card">
        <div class="card-head"></div>
        <div class="card-body">
            <h1>{{ $title }}</h1>
            <p>There is currently no text in this page.</p>

        </div>
    </div>
@endsection
