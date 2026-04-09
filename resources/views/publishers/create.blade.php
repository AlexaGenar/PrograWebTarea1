@extends('layout')

@section('title', 'Agregar Publisher')

@section('content')
    <h1>Add Publisher</h1>
    <form action="{{ route('publishers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="text" name="publisher" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" name="country" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="founded">Founded</label>
            <input type="number" name="founded" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="genere">Genere</label>
            <input type="text" name="genere" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection