@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Jokes archive</h1>
        @if (session('delete'))
            <div class="alert alert-success">
                {{ session('delete') }} delete success
            </div>
        @endif
        @forelse ($jokes as $joke)
            <article>
                <h3>
                    {{$joke->title}}
                </h3>
                <a href="{{ route('jokes.show', $joke->id) }}">read more</a>
                <a href="{{ route('jokes.edit', $joke->id) }}">Edit Jokes</a>
                {{-- <a href="{{ route('jokes.destroy', $joke->id) }}">Delete Jokes</a> --}}

                <form action="{{ route('jokes.destroy', $joke->id) }}" method="POST">
                @csrf

                @method('DELETE')
                <button class="btn btn-primary" type="submit">DELETE</button>
                </form>
            </article>
        @empty
            <p>
                No joke found yet
            </p>
        @endforelse
    </div>
@endsection