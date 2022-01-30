@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <h1 class="mt-3">Create a new Joke</h1>
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('jokes.store') }}" method="POST">
                        @csrf
                        <div class="mt-5">
                            <label for="author" class="form-label">Author</label>
                            <input class="form-control" type="text" id="author" name="author">
                        </div>
                        <div class="mt-5">
                            <label for="title" class="form-label">title</label>
                            <textarea class="form-control" id="title" name="title"></textarea>
                        </div>
                        <div class="mt-5">
                            <label for="body" class="form-label">body</label>
                            <textarea class="form-control" id="body" name="body"></textarea>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-primary">Create a new joke</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection