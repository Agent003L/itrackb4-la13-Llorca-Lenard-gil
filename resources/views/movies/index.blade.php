@extends('layouts.app')
@section('title', 'Movies')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">All movies</h2>
    <a href="{{ route('movies.create') }}" class="btn btn-primary">+ Add Movie</a>
</div>

<form method="GET" action="{{ route('movies.index') }}" class="card card-body shadow-sm mb-4">
    <div class="row g-2 align-items-end">
        <div class="col-md-3">
            <label class="form-label fw-bold">Search title</label>
            <input type="text" name="search" value="{{ request('search') }}"
                   class="form-control" placeholder="e.g. night">
        </div>

        <div class="col-md-2">
            <label class="form-label fw-bold">Genre</label>
            <select name="genre" class="form-select">
                <option value="">All</option>
                @foreach ($genres as $g)
                    <option value="{{ $g->id }}"
                        @selected(request('genre') == $g->id)>{{ $g->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-2">
            <label class="form-label fw-bold">Watched?</label>
            <select name="watched" class="form-select">
                <option value="">Any</option>
                <option value="1" @selected(request('watched') === '1')>Watched</option>
                <option value="0" @selected(request('watched') === '0')>Not watched</option>
            </select>
        </div>

        <div class="col-md-2">
            <label class="form-label fw-bold">Sort by</label>
            <select name="sort" class="form-select">
                <option value="title" @selected(request('sort', 'title') === 'title')>Title</option>
                <option value="year" @selected(request('sort') === 'year')>Year</option>
                <option value="director" @selected(request('sort') === 'director')>Director</option>
            </select>
        </div>

        <div class="col-md-3 d-flex gap-2">
            <button class="btn btn-primary">Apply</button>
            <a href="{{ route('movies.index') }}" class="btn btn-outline-secondary">Clear</a>
        </div>
    </div>
</form>

<div class="table-responsive">
    <table class="table table-striped table-hover align-middle bg-white shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Year</th>
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movies as $movie)
                <tr>
                    <td>{{ $movie->id }}</td>
                    <td>{{ $movie->title }}</td>
                    <td><span class="badge bg-secondary">{{ $movie->genre->name }}</span></td>
                    <td>{{ $movie->year }}</td>
                    <td class="text-end">
                        <a class="btn btn-sm btn-outline-dark"
                           href="{{ route('movies.show', $movie) }}">View Details</a>
                        <a href="{{ route('movies.edit', $movie) }}"
                           class="btn btn-outline-primary btn-sm">Edit</a>
                        <form action="{{ route('movies.destroy', $movie) }}" method="POST"
                              class="d-inline"
                              onsubmit="return confirm('Delete this record?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-4">No movies match these filters.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{ $movies->links() }}
@endsection