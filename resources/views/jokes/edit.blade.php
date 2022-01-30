@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <h1 class="mt-3">Edit {{ $edit_joke->title }}</h1>
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('jokes.update', $edit_joke->id) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="mt-5">
                            <label for="author" class="form-label">Author</label>
                            <input class="form-control" type="text" id="author" name="author" value="{{ $edit_joke->author }}">
                        </div>
                        <div class="mt-5">
                            <label for="title" class="form-label">title</label>
                            <input class="form-control" id="title" name="title" value="{{ $edit_joke->title }}">
                        </div>
                        <div class="mt-5">
                            <label for="body" class="form-label">body</label>
                            <textarea class="form-control" id="body" name="body">{{ $edit_joke->body }}</textarea>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-primary">
                                Create a new joke
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection