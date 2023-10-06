<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        @php ($i=1)
        @foreach ($posts as $post )
        <div class="blog">
            <h3>{{ $post [0]}} <small>#{{ $i }}</small></h3>
            <p>{{ $post [1]}}</p>
        </div>
        @php($i++)
        @endforeach
    </div>
</body>
</html>
