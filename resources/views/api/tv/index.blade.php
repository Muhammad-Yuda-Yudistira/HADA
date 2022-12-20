<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/css/foundation.min.css" crossorigin="anonymous">

</head>
<body>
    {{-- menu --}}
    <div class="top-bar">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text">HADA Film</li>
            <li>
              <a href="/api/movies">Movies</a>
              <ul class="menu vertical">
                
              </ul>
            </li>
            <li><a href="/api/tv">TV</a></li>
            <li><a href="/api/animes">Animes</a></li>
          </ul>
        </div>
        <div class="top-bar-right">
          <ul class="menu">
            <li><input type="search" placeholder="Search"></li>
            <li><button type="button" class="button">Search</button></li>
          </ul>
        </div>
    </div>

    {{-- card --}}
    <div class="grid-container">
        <h1>{{ $title }} Airing Today</h1>
        <p>Jumlah movies: {{ $totalResults / $totalPages }} / {{ $totalResults }}</p>
        <div class="grid-x">
            @foreach ($television as $tv)
            <div class="cell small-4 auto">
                <div class="card" style="width: 300px;">
                    <div class="card-divider">
                        <h4>{{ $tv['first_air_date'] }}</h4>
                    </div>
                    <img src="https://image.tmdb.org/t/p/w500{{ $tv['poster_path'] }}">
                    <div class="card-section">
                        <h4>{{ $tv['name'] }}</h4>
                        <h6>Rating: {{ $tv['vote_average'] }}</h6>
                        <p>{{ $tv['overview'] }}</p>
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
                    <li><a href="http://127.0.0.1:8000/api/tv/{{ $i }}" aria-label="Page 2"> {{ $i }}</a></li>
                @endfor
                <li class="pagination-next"><a href="#" aria-label="Next page">Next</a></li>
            </ul>
        </nav>
    </div>

    <!-- Compressed JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/js/foundation.min.js" crossorigin="anonymous"></script>
</body>
</html>