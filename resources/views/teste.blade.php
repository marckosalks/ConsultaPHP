<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Repositórios Git hub Marck Tigger:</h1>
    <ul>
    @foreach ( $repos as $repo )
        <li>{{ $repo['name'] }}</li>
    @endforeach
    </ul>

</body>
</html>
