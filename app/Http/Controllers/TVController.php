<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TVController extends Controller
{
    public function getTV($result)
    {
        $tv = json_decode($result, true);
        $totalPages = $tv['total_pages'];
        $totalResults = $tv['total_results'];
        $tv = $tv['results'];
        return view('api.tv.index', [
            'title' => 'TV',
            'television' => $tv,
            'totalPages' => $totalPages,
            'totalResults' => $totalResults
        ]
        );
    }
    public function index()
    {
        $result = file_get_contents('https://api.themoviedb.org/3/tv/airing_today?api_key=378b9493a5a17565ce43760046710356');
        return $this->getTV($result);
    }
    public function show($page)
    {
        $result = file_get_contents('https://api.themoviedb.org/3/tv/airing_today?api_key=378b9493a5a17565ce43760046710356&page=' . $page);
        return $this->getTV($result);
    }
}
