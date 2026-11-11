<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $search  = $request->query('search');
        $genre   = $request->query('genre');
        $watched = $request->query('watched');
        $sort    = $request->query('sort', 'title');

        if (! in_array($sort, ['title', 'year', 'director'])) {
            $sort = 'title';
        }

        $genres = Genre::all();

        $query = Movie::with('genre');

        if ($search) {
            $query = $query->where('title', 'like', "%{$search}%");
        }
        if ($genre) {
            $query = $query->where('genre_id', $genre);
        }
        if ($watched !== null && $watched !== '') {
            $query = $query->where('is_watched', (int) $watched);
        }

        $movies = $query->orderBy($sort)->paginate(8)->withQueryString();

        return view('movies.index', [
            'movies' => $movies,
            'genres' => $genres,
        ]);
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function featured()
    {
        $movie = Movie::find(3);

        abort_if(! $movie, 404);

        return view('movies.featured', ['movie' => $movie]);
    }

    public function create()
    {
        return view('movies.create', ['genres' => Genre::all()]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'      => 'required|string|max:255',
            'director'   => 'required|string|max:255',
            'genre_id'   => 'required|exists:genres,id',
            'year'       => 'required|integer|min:1888|max:2100',
            'is_watched' => 'required|boolean',
            'notes'      => 'nullable|string',
        ]);

        $movie = Movie::create($validated);

        Log::info('Movie saved', [
            'id'    => $movie->id,
            'title' => $movie->title,
        ]);

        return redirect('/movies');
    }

    public function edit(Movie $movie)
    {
        $genres = Genre::all();

        return view('movies.edit', compact('movie', 'genres'));
    }

    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'title'      => 'required|string|max:255',
            'director'   => 'required|string|max:255',
            'genre_id'   => 'required|exists:genres,id',
            'year'       => 'required|integer|min:1888|max:2100',
            'is_watched' => 'required|boolean',
            'notes'      => 'nullable|string',
        ]);

        $movie->update($validated);

        return redirect()->route('movies.index');
    }

    public function destroy(Movie $movie)
    {
        abort_if($movie->genre->movies()->count() === 1, 403);

        $movie->delete();

        return redirect()->route('movies.index');
    }
}