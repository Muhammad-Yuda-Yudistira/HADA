<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function getAnime($animes)
    {
        $pagination = $animes['pagination'];
        $animes = $animes['data'];
        return view('api.anime.index', [
            'title' => 'Anime',
            'animes' => $animes,
            'pagination' => $pagination
        ]);
    }
    public function index()
    {
        $result = file_get_contents('https://api.jikan.moe/v4/seasons/now');
        $animes = json_decode($result, true);
        return $this->getAnime($animes);
    }
    public function page($page)
    {
        $result = file_get_contents('https://api.jikan.moe/v4/seasons/now?page=' . $page);
        $animes = json_decode($result, true);
        return $this->getAnime($animes);
    }
}
