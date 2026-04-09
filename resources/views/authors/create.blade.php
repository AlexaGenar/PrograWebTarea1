@extends('layout')

@section('title', 'Agregar Autor')

@section('content')
    <h1>Add Author</h1>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" name="nationality" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="birth_year">Birth Year</label>
            <input type="number" name="birth_year" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="fields">Fields</label>
            <input type="text" name="fields" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection