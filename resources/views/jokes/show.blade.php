@extends('layouts.main')

@section('content')
    <div class="container">
        <h3>{{ $joke->title }}</h3>
        <h4>{{ $joke->author }}</h4>
        <p>{{ $joke->body }}</p>

        <a href="{{ route('jokes.index') }}">Back to archive</a>
    </div>
@endsection