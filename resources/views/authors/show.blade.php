@extends('layout')

@section('title', $author['author'])

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <a href="{{ route('authors.index') }}" class="btn btn-dark">
            Atrás
        </a>

        <h1 class="m-0 text-center flex-grow-1">
            {{ $author['author'] }}
        </h1>

        <div style="width: 80px;"></div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <p><strong>Nationality:</strong> {{ $author['nationality'] }}</p>
            <p><strong>Birth Year:</strong> {{ $author['birth_year'] }}</p>
            <p><strong>Fields:</strong> {{ $author['fields'] }}</p>

            <h4 class="mt-4">Books</h4>
            <ul class="list-group mb-3">
                @foreach ($author['books__book_id'] as $index => $bookId)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>{{ $author['books__title'][$index] }}</span>
                        <a href="{{ route('books.show', $bookId) }}" class="btn btn-primary btn-sm">
                            View
                        </a>
                    </li>
                @endforeach
            </ul>

            <a href="{{ route('authors.index') }}" class="btn btn-secondary">Back to Authors</a>
        </div>
    </div>
@endsection