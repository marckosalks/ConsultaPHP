<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Filmes do Homem aranha:</h1>
    <ul>
        @foreach ($movies['Search'] as $movie )
            <li>{{$movie['Title']}}
                <br>
                <img src={{ $movie['Poster'] }} width="100px"  alt="">
            </li>
        @endforeach
    </ul>



</body>
</html>
