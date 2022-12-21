@extends('api.layouts.main')

@section('content')

    {{-- card --}}
    <div class="grid-container">
        <h1>{{ $title }} Upcoming</h1>
        <h3>Tanggal Rilis: {{ $dates['minimum'] }} / {{ $dates['maximum'] }}</h3>
        <p>Jumlah movies: {{ $totalResults / $totalPages }} / {{ $totalResults }}</p>
        <div class="grid-x">
            @foreach ($movies as $movie)
            <div class="cell small-4 auto">
                <div class="card" style="width: 300px;">
                    <div class="card-divider">
                        <h4>{{ $movie['release_date'] }}</h4>
                    </div>
                    <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}">
                    <div class="card-section">
                        <h4>{{ $movie['title'] }}</h4>
                        <h6>Rating: {{ $movie['vote_average'] }}</h6>
                        <p>{{ $movie['overview'] }}</p>
                    </div>
                </div> 
            </div>
            @endforeach
        </div>
        {{-- pagination --}}
        <nav aria-label="Pagination">
            <ul class="pagination text-center">
                <li class="pagination-previous disabled">Previous</li>
                @for ($i = 1; $i <= $totalPages; $i++)
                    <li><a href="http://127.0.0.1:8000/api/movies/{{ $i }}" aria-label="Page 2"> {{ $i }}</a></li>
                @endfor
                <li class="pagination-next"><a href="#" aria-label="Next page">Next</a></li>
            </ul>
        </nav>
    </div>

@endsection