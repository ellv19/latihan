<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{ asset('bootstrapjs/bootstrap.bundle.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .blog{
            border-bottom: solid lightslategrey;
        }
        small{
            color: lightgrey
        }
    </style>
</head>
<body>
    <div>
        @foreach ($posts as $p )
        @php(dd($p))
        <div class="blog">
            <div class="card-body">
                <h5 class="card-title">{{ $p[0] }}</h5>
                <p class="card-text">{{ $p[1] }}</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              </div>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>
