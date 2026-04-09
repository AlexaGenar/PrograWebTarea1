@extends('layout')

@section('title', 'Libros')

@section('content')
    <h1 class="text-center mb-4">Books</h1>

    <div class="text-center mt-4">
        <a href="{{ route('books.create') }}" class="btn btn-dark">Add Book</a>
    </div>

    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text text-muted">{{ $book->author->author }}</p>
                        <p class="card-text text-muted">{{ $book->publisher->publisher }}</p> 
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary btn-sm">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('authors.index') }}" class="btn btn-dark me-2">Authors</a>
        <a href="{{ route('publishers.index') }}" class="btn btn-secondary">Publishers</a>
    </div>
@endsection