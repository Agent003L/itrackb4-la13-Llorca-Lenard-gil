@extends('layouts.app')
@section('title', 'Page not found')

@section('content')
    <div class="text-center py-5">
        <h1 class="display-4">Page not found</h1>
        <p class="text-muted">
            We couldn't find that movie. Check the address, or head back to your list.
        </p>
        <a href="{{ route('movies.index') }}" class="btn btn-primary">Back to the list</a>
    </div>
@endsection