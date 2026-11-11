<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        $thriller   = Genre::firstOrCreate(['name' => 'Thriller']);
        $historical = Genre::firstOrCreate(['name' => 'Historical']);
        $scifi      = Genre::firstOrCreate(['name' => 'Sci-Fi']);
        $animation  = Genre::firstOrCreate(['name' => 'Animation']);
        $action     = Genre::firstOrCreate(['name' => 'Action']);
        $drama      = Genre::firstOrCreate(['name' => 'Drama']);
        $horror     = Genre::firstOrCreate(['name' => 'Horror']);
        $comedy     = Genre::firstOrCreate(['name' => 'Comedy']);
        $romance    = Genre::firstOrCreate(['name' => 'Romance']);

        Movie::create([
            'title' => 'Parasite', 'director' => 'Bong Joon-ho',
            'genre_id' => $thriller->id, 'year' => 2019,
            'is_watched' => true, 'notes' => 'Great ending.',
        ]);
        Movie::create([
            'title' => 'Heneral Luna', 'director' => 'Jerrold Tarog',
            'genre_id' => $historical->id, 'year' => 2015, 'is_watched' => false,
        ]);
        Movie::create([
            'title' => 'Inception', 'director' => 'Christopher Nolan',
            'genre_id' => $scifi->id, 'year' => 2010,
            'is_watched' => true, 'notes' => 'Needs a second viewing.',
        ]);
        Movie::create([
            'title' => 'Spirited Away', 'director' => 'Hayao Miyazaki',
            'genre_id' => $animation->id, 'year' => 2001, 'is_watched' => true,
        ]);
        Movie::create([
            'title' => 'The Dark Knight', 'director' => 'Christopher Nolan',
            'genre_id' => $action->id, 'year' => 2008, 'is_watched' => false,
        ]);
        Movie::create([
            'title' => 'Goodbye, Don Wan', 'director' => 'Jun Robles Lana',
            'genre_id' => $drama->id, 'year' => 2019, 'is_watched' => false,
        ]);
        Movie::create([
            'title' => 'Interstellar', 'director' => 'Christopher Nolan',
            'genre_id' => $scifi->id, 'year' => 2014, 'is_watched' => true,
        ]);
        Movie::create([
            'title' => 'Your Name', 'director' => 'Makoto Shinkai',
            'genre_id' => $animation->id, 'year' => 2016, 'is_watched' => true,
        ]);

        // --- Additional movies ---
        Movie::create([
            'title' => 'Goyo: Ang Batang Heneral', 'director' => 'Jerrold Tarog',
            'genre_id' => $historical->id, 'year' => 2018, 'is_watched' => false,
        ]);
        Movie::create([
            'title' => 'Joker', 'director' => 'Todd Phillips',
            'genre_id' => $drama->id, 'year' => 2019,
            'is_watched' => true, 'notes' => 'Strong lead performance.',
        ]);
        Movie::create([
            'title' => 'Mad Max: Fury Road', 'director' => 'George Miller',
            'genre_id' => $action->id, 'year' => 2015, 'is_watched' => true,
        ]);
        Movie::create([
            'title' => 'The Matrix', 'director' => 'Lana Wachowski, Lilly Wachowski',
            'genre_id' => $scifi->id, 'year' => 1999, 'is_watched' => true,
        ]);
        Movie::create([
            'title' => 'Ratatouille', 'director' => 'Brad Bird',
            'genre_id' => $animation->id, 'year' => 2007, 'is_watched' => false,
        ]);
        Movie::create([
            'title' => 'Coco', 'director' => 'Lee Unkrich',
            'genre_id' => $animation->id, 'year' => 2017,
            'is_watched' => true, 'notes' => 'Emotional ending.',
        ]);
        Movie::create([
            'title' => 'Get Out', 'director' => 'Jordan Peele',
            'genre_id' => $horror->id, 'year' => 2017, 'is_watched' => true,
        ]);
        Movie::create([
            'title' => 'Hereditary', 'director' => 'Ari Aster',
            'genre_id' => $horror->id, 'year' => 2018, 'is_watched' => false,
        ]);
        Movie::create([
            'title' => 'Se7en', 'director' => 'David Fincher',
            'genre_id' => $thriller->id, 'year' => 1995, 'is_watched' => false,
        ]);
        Movie::create([
            'title' => 'Gone Girl', 'director' => 'David Fincher',
            'genre_id' => $thriller->id, 'year' => 2014, 'is_watched' => true,
        ]);
        Movie::create([
            'title' => 'Weathering with You', 'director' => 'Makoto Shinkai',
            'genre_id' => $animation->id, 'year' => 2019, 'is_watched' => true,
        ]);
        Movie::create([
            'title' => 'Blade Runner 2049', 'director' => 'Denis Villeneuve',
            'genre_id' => $scifi->id, 'year' => 2017, 'is_watched' => false,
        ]);
        Movie::create([
            'title' => 'Everything Everywhere All at Once', 'director' => 'Daniel Kwan, Daniel Scheinert',
            'genre_id' => $scifi->id, 'year' => 2022,
            'is_watched' => true, 'notes' => 'Wild and heartfelt.',
        ]);
        Movie::create([
            'title' => 'Die Beautiful', 'director' => 'Jun Robles Lana',
            'genre_id' => $comedy->id, 'year' => 2016, 'is_watched' => false,
        ]);
        Movie::create([
            'title' => 'Four Sisters and a Wedding', 'director' => 'Cathy Garcia-Molina',
            'genre_id' => $comedy->id, 'year' => 2013, 'is_watched' => true,
        ]);
        Movie::create([
            'title' => 'Hello, Love, Goodbye', 'director' => 'Cathy Garcia-Molina',
            'genre_id' => $romance->id, 'year' => 2019, 'is_watched' => true,
        ]);
        Movie::create([
            'title' => 'John Wick', 'director' => 'Chad Stahelski',
            'genre_id' => $action->id, 'year' => 2014, 'is_watched' => false,
        ]);
    }
}