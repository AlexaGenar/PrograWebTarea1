@extends('layout')

@section('title', 'Agregar Libro')

@section('content')
    <h1>Add Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="edition">Edition</label>
            <input type="text" name="edition" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="copyright">Copyright</label>
            <input type="text" name="copyright" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="language">Language</label>
            <input type="text" name="language" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="pages">Pages</label>
            <input type="number" name="pages" class="form-control" required>
        </div>

        <!-- Selección de autor -->
        <div class="form-group">
            <label for="author_id">Author</label>
            <select name="author_id" class="form-control" required>
                <option value="">Select an author</option>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->author }}</option>
                @endforeach
            </select>
        </div>

        <!-- Selección de editorial -->
        <div class="form-group">
            <label for="publisher_id">Publisher</label>
            <select name="publisher_id" class="form-control" required>
                <option value="">Select a publisher</option>
                @foreach($publishers as $publisher)
                    <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection