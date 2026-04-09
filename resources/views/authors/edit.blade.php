@extends('layout')

@section('title', 'Editar Autor')

@section('content')
    <h1>Edit Author</h1>
    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT') 
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" class="form-control" value="{{ $author->author }}" required>
        </div>

        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" name="nationality" class="form-control" value="{{ $author->nationality }}" required>
        </div>

        <div class="form-group">
            <label for="birth_year">Birth Year</label>
            <input type="number" name="birth_year" class="form-control" value="{{ $author->birth_year }}" required>
        </div>

        <div class="form-group">
            <label for="fields">Fields</label>
            <input type="text" name="fields" class="form-control" value="{{ $author->fields }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection