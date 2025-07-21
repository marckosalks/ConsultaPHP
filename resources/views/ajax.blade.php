<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <input type="text" id="nome" placeholder="Nome">
    <input type="email" id="email" placeholder="Email">
    <button id="enviar">Enviar</button>

    <div id="resultado"
        style="margin-top: 20px; font-family: Georgia, 'Times New Roman', Times, serif ;font-weight: bold; color: red">
    </div>

    <script src="{{ asset('js/ajax.js') }}"></script>
</body>

</html>
