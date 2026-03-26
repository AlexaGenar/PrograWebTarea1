@extends('layout')

@section('title', 'Editoriales')

@section('content')
  <div class="d-flex align-items-center justify-content-between mb-4">

    <a href="{{ route('books.index') }}" class="btn btn-dark">
        Atrás
    </a>

    <h1 class="m-0 text-center flex-grow-1">
       Publishers
    </h1>
</div>

    </div> 
    <div class="row">
        @foreach ($publishers as $publisher)
            <div class="col-md-6 col-lg-4 mb-4  align-items-center">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center ">
                        <h5 class="card-title">{{ $publisher['publisher'] }}</h5>
                        <p class="card-text text-muted">{{ $publisher['country'] }}</p>
                        <a href="{{ route('publishers.show', $publisher['id']) }}" class="btn btn-secondary btn-sm">
                            View details
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
@endsection