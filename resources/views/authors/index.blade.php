@extends('layout')

@section('title', 'Autores')

@section('content')
   <div class="d-flex align-items-center justify-content-between mb-4">
        <a href="{{ route('books.index') }}" class="btn btn-dark">
            Back
        </a>

        <h1 class="m-0 text-center flex-grow-1">
            Authors
        </h1>
    </div>

    <div class="mb-4 text-end">
        <a href="{{ route('authors.create') }}" class="btn btn-success">Add Author</a>
    </div>

    <div class="row">
        @foreach ($authors as $author)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $author['author'] }}</h5>
                        <p class="card-text text-muted">{{ $author['nationality'] }}</p>
                        <a href="{{ route('authors.show', $author['id']) }}" class="btn btn-dark btn-sm">
                            View details
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection