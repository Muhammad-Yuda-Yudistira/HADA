<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function getMovie($result)
    {
        $movies = json_decode($result, true);
        $totalPages = $movies['total_pages'];
        $totalResults = $movies['total_results'];
        $dates = $movies['dates'];
        $movies = $movies['results'];
        return view('api.movies.index', [
            'title' => 'Movies',
            'movies' => $movies,
            'totalPages' => $totalPages,
            'totalResults' => $totalResults,
            'dates' => $dates
        ]
        );
    }
    public function index()
    {
        $result = file_get_contents('https://api.themoviedb.org/3/movie/upcoming?api_key=378b9493a5a17565ce43760046710356');
        return $this->getMovie($result);
    }
    public function show($page)
    {
        $result = file_get_contents('https://api.themoviedb.org/3/movie/upcoming?api_key=378b9493a5a17565ce43760046710356&page=' . $page);
        return $this->getMovie($result);
    }
}
