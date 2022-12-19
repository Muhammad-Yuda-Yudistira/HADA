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
    <div class="grid-container">
        <div class="grid-x">
            @foreach ($tv as $t)
            <div class="cell small-4 auto">
                <div class="card" style="width: 300px;">
                    <div class="card-divider">
                        <h4>{{ $t['title'] }}</h4>
                    </div>
                    <img src="https://api.themoviedb.org{{ $t['poster_path'] }}">
                    <div class="card-section">
                        <p>{{ $t['overview'] }}</p>
                    </div>
                </div> 
            </div>
            @endforeach
        </div>
    </div>

    <!-- Compressed JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/js/foundation.min.js" crossorigin="anonymous"></script>
</body>
</html>