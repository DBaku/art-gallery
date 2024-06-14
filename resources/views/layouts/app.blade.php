<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Pokédex</title>
    <link href="{{ mix('css/pokedex.css') }}" rel="stylesheet">
    <style>
.container {
    border: 2px solid black; 
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: red;
}

.card {

    margin-top: 20px;
}

.card-header {
    text-align: center;
}

.card-body {
    display: flex;
    align-items: center;
}

.img-fluid {
    max-width: 100%;
    height: auto;
}

.input-group {
    margin-bottom: 20px;
}
    </style>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>