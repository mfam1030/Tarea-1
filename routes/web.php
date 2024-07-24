<?php

use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('home');
});


Route::get('/movies/genre/{genre}', [MovieController::class, 'showMoviesByGenre']);

Route::get('/movies/genre/{genre}', [MovieController::class, 'showMoviesByGenre']);
Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies', [MovieController::class, 'store']);
Route::get('/movies/genre/{genre}', 'App\Http\Controllers\MovieController@showMoviesByGenre');
Route::get('/movies/genre/{genre}', 'App\Http\Controllers\MovieController@showMoviesByGenre');
