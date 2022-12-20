<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TVController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
// Route::resource('/api/film', FilmController::class);
Route::get('/api/movies', [MovieController::class, 'index']);
Route::get('/api/movies/{page}', [MovieController::class, 'show']);
Route::get('/api/tv', [TVController::class, 'index']);
Route::get('/api/tv/{page}', [TVController::class, 'show']);