@extends('layout')

@section('title', 'Editar Publisher')

@section('content')
    <h1>Edit Publisher</h1>
    <form action="{{ route('publishers.update', $publisher->id) }}" method="POST">
        @csrf
        @method('PUT')  
        
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="text" name="publisher" class="form-control" value="{{ $publisher->publisher }}" required>
        </div>

        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" name="country" class="form-control" value="{{ $publisher->country }}" required>
        </div>

        <div class="form-group">
            <label for="founded">Founded</label>
            <input type="number" name="founded" class="form-control" value="{{ $publisher->founded }}" required>
        </div>

        <div class="form-group">
            <label for="genere">Genere</label>
            <input type="text" name="genere" class="form-control" value="{{ $publisher->genere }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection