<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <div class="row">

                <h3 class="text-danger p-3 text-center">Lista di film</h3>

                @foreach ($movies as $movie)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-3 mt-2">
                        <div class="card">
                            <div class="card-img-top ">
                                <img class="img-fluid " src="{{ $movie->image }}" alt="">
                            </div>
                            <div class="card-body">
                                <h3 class="text-black "> Title:{{ $movie->title }} </h3>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </main>

</body>

</html>

<style lang="scss" scoped>
    .card:hover {
        opacity: 1;
    }


    .card {
        cursor: pointer;

        transition: all 3s;
    }

    .card-image {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 100%;
    }

    img {
        width: 100%;
        height: 100%;
    }

    .card-body {
        color: #c8c8c8;
    }
</style>
