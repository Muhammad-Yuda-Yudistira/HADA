<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $result = file_get_contents('https://api.themoviedb.org/3/movie/upcoming?api_key=378b9493a5a17565ce43760046710356');
        $movies = json_decode($result, true);
        $totalPages = $movies['total_pages'];
        $movies = $movies['results'];
        return view('api.index', [
            'title' => 'Film',
            'movies' => $movies,
            'totalPages' => $totalPages
        ]
        );
    }
    public function show($page)
    {
        $result = file_get_contents('https://api.themoviedb.org/3/movie/upcoming?api_key=378b9493a5a17565ce43760046710356&page=' . $page);
        $movies = json_decode($result, true);
        $totalPages = $movies['total_pages'];
        $movies = $movies['results'];
        return view('api.index', [
            'title' => 'Film',
            'movies' => $movies,
            'totalPages' => $totalPages
        ]
        );
    }
}
