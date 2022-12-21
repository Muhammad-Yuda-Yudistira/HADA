<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TVController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('api.layouts.page');
});
// Route::resource('/api/film', FilmController::class);
Route::get('/api/movies', [MovieController::class, 'index']);
Route::get('/api/movies/{page}', [MovieController::class, 'show']);
Route::get('/api/tv', [TVController::class, 'index']);
Route::get('/api/tv/{page}', [TVController::class, 'show']);
Route::get('/api/anime', [AnimeController::class, 'index']);
Route::get('/api/anime/{page}', [AnimeController::class, 'page']);