<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/movies/featured', [MovieController::class, 'featured'])
    ->name('movies.featured');

Route::get('/movies/filter/{value?}', function ($value = null) {
    $filters = [];

    if ($value !== null && $value !== '') {
        $filters['genre'] = $value;
    }

    return redirect()->route('movies.index', $filters);
})
    ->name('movies.filter');

Route::resource('movies', MovieController::class);