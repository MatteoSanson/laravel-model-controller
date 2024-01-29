<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <div class="container text-center">
            <h1 class="py-3">Movie model-controller db</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4">
                @foreach ($movies as $movie)
                    <div class="col mb-4">
                        <div class="card h-100 w-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie['title'] }}</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie['original_title'] }}</h6>
                                <ul class="list-unstyled">
                                    <li>
                                        <p>{{ $movie['nationality'] }}</p>
                                    </li>
                                    <li>
                                        <p>{{ $movie['date'] }}</p>
                                    </li>
                                    <li>
                                        <p>{{ $movie['vote'] }}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
