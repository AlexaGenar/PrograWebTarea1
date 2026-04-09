@extends('layout')

@section('title', $publisher->name)

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <a href="{{ route('publishers.index') }}" class="btn btn-dark">
            Back
        </a>

        <h1 class="m-0 text-center flex-grow-1">
            {{ $publisher->publisher }}
        </h1>

        <div style="width: 80px;"></div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <p><strong>Country:</strong> {{ $publisher->country }}</p>
            <p><strong>Founded:</strong> {{ $publisher->founded }}</p>
            <p><strong>Genere:</strong> {{ $publisher->genre }}</p>

            <h4 class="mt-4">Books</h4>
            <ul class="list-group mb-3">
                @forelse ($publisher->books as $book)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>{{ $book->title }}</span>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary btn-sm">
                            View
                        </a>
                    </li>
                @empty
                    <li class="list-group-item">No books available.</li>
                @endforelse
            </ul>

           
            <a href="{{ route('publishers.edit', $publisher->id) }}" class="btn btn-warning mt-3">Edit Publisher</a>

            <a href="{{ route('publishers.index') }}" class="btn btn-secondary mt-3">Back to Publishers</a>
        </div>
    </div>
@endsection