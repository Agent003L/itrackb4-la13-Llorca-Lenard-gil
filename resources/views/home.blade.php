@extends('layouts.app')
@section('title', 'Home')

@section('content')
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
    <h2 class="display-6">Keep track of every movie you've watched and the ones still waiting</h2>
    <p class="lead text-muted">
        Add the movies you love, mark which ones you've seen, and search or filter your list by genre.
    </p>
    <a href="{{ route('movies.index') }}" class="btn btn-primary btn-lg">Browse my movies</a>
</div> 
<div class="row g-3 mb-4">
    <div class="col-md-6">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <div class="display-5 fw-bold">{{ $movieCount }}</div>
                <div class="text-muted">Movies in my list</div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <div class="display-5 fw-bold">{{ $genreCount }}</div>
                <div class="text-muted">Genres to choose from</div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex align-items-center">
    <img src="{{ asset('img/lenardprofile.jpg') }}" width="96" height="96"
         class="rounded-circle me-3" alt="Profile photo">
    <div>
        <div class="fw-bold">Lenard Llorca</div>
    <div class="text-muted">BS INFORMATION TECHNOLOGY · 4 · BLOCK A</div>
    </div>
</div>
@endsection