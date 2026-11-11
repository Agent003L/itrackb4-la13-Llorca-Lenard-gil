<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;


class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'movieCount' => Movie::count(),
            'genreCount' => Genre::count(),
        ]);
    }
}