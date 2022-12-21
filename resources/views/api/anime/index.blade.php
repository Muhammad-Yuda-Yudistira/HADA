@extends('api.layouts.main')

@section('content')

    {{-- card --}}
    <div class="grid-container">
        <h1>{{ $title }} New Season</h1>
        <h3>Tanggal Rilis: Fall 2022</h3>
        <p>Jumlah movies: 200</p>
        <div class="grid-x">
            @foreach ($animes as $anime)
            <div class="cell small-4 auto">
                <div class="card" style="width: 300px;">
                    <div class="card-divider">
                        <h4>{{ $anime['episodes'] }} Episode</h4>
                    </div>
                    <img src="{{ $anime['images']['jpg']['image_url'] }}">
                    <div class="card-section">
                        <h4>{{ $anime['title'] }}</h4>
                        <h6>Rating: {{ $anime['score'] }}</h6>
                        @foreach($anime['genres'] as $genres)
                        <li>
                            {{ $genres['name'] }}
                        </li>
                        @endforeach 
                    </div>
                </div> 
            </div>
            @endforeach
        </div>
        
        {{-- pagination --}}
        <nav aria-label="Pagination">
            <ul class="pagination text-center">
                <li class="pagination-previous disabled">Previous</li>
                @for ($i = 1; $i <= $pagination['last_visible_page']; $i++)
                    <li><a href="http://127.0.0.1:8000/api/anime/{{ $i }}" aria-label="Page 2"> {{ $i }}</a></li>
                @endfor
                <li class="pagination-next"><a href="#" aria-label="Next page">Next</a></li>
            </ul>
        </nav>
    </div>

    @endsection