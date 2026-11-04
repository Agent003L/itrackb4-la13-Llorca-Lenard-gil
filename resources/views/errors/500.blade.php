@extends('layouts.app')
@section('title', 'Something went wrong')

@section('content')
    <div class="text-center py-5">
        <h1 class="display-4">Something went wrong</h1>
        <p class="text-muted">
            That one's on us. The problem has been recorded and we'll look into it.
        </p>
        <a href="{{ route('movies.index') }}" class="btn btn-primary">Back to the list</a>
    </div>
@endsection