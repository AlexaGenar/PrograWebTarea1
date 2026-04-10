@extends('layout')

@section('title', 'Editar Libro')

@section('content')
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')  
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
        </div>

        <div class="form-group">
            <label for="edition">Edition</label>
            <input type="text" name="edition" class="form-control" value="{{ $book->edition }}" required>
        </div>

        <div class="form-group">
            <label for="copyright">Copyright</label>
            <input type="text" name="copyright" class="form-control" value="{{ $book->copyright }}" required>
        </div>

        <div class="form-group">
            <label for="language">Language</label>
            <input type="text" name="language" class="form-control" value="{{ $book->language }}" required>
        </div>

        <div class="form-group">
            <label for="pages">Pages</label>
            <input type="number" name="pages" class="form-control" value="{{ $book->pages }}" required>
        </div>

        <div class="form-group">
            <label for="author_id">Author</label>
            <select name="author_id" class="form-control" required>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ $author->id == $book->author_id ? 'selected' : '' }}>{{ $author->author }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="publisher_id">Publisher</label>
            <select name="publisher_id" class="form-control" required>
                @foreach($publishers as $publisher)
                    <option value="{{ $publisher->id }}" {{ $publisher->id == $book->publisher_id ? 'selected' : '' }}>{{ $publisher->publisher }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection