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
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-3">
                        <ul class="d-flex list-unstyled gap-3">
                            <li>{{ $movie['title'] }}</li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
