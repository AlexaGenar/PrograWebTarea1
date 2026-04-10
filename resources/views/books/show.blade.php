@extends('layout')

@section('title', $book->title)

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title mb-3">{{ $book->title }}</h1>

            <p><strong>Edition:</strong> {{ $book->edition }}</p>
            <p><strong>Copyright:</strong> {{ $book->copyright }}</p>
            <p><strong>Language:</strong> {{ $book->language }}</p>
            <p><strong>Pages:</strong> {{ $book->pages }}</p>
            <p>
                <strong>Author:</strong>
                <a href="{{ route('authors.show', $book->author->id) }}">
                    {{ $book->author->author }}
                </a>
            </p>
            <p>
                <strong>Publisher:</strong>
                <a href="{{ route('publishers.show', $book->publisher->id) }}">
                    {{ $book->publisher->publisher }}
                </a>
            </p>
             <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning mt-3">Edit Book</a>
             
            <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">Back to Books</a>
        </div>
    </div>
@endsection