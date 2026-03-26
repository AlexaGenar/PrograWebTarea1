@extends('layout')

@section('title', $publisher['publisher'])

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title mb-3">{{ $publisher['publisher'] }}</h1>

            <p><strong>Country:</strong> {{ $publisher['country'] }}</p>
            <p><strong>Founded:</strong> {{ $publisher['founded'] }}</p>
            <p><strong>Genre:</strong> {{ $publisher['genere'] }}</p>

            <h4 class="mt-4">Books published</h4>
            <ul class="list-group mb-3">
                @foreach ($publisher['books'] as $book)
                    <li class="list-group-item">
                        <a href="{{ route('books.show', $book['id']) }}">
                            {{ $book['title'] }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <a href="{{ route('publishers.index') }}" class="btn btn-secondary">Back to Publishers</a>
        </div>
    </div>
@endsection