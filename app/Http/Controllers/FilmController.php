<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = file_get_contents('https://api.themoviedb.org/3/movie/upcoming?api_key=378b9493a5a17565ce43760046710356&page=' . $id);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
