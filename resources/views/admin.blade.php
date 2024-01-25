<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    {!!Html::style('libraries/bootstrap.min.css')!!}
</head>
<body>
    <div class="container">
        <h3>Bienvenid@ {!!Auth::user()->name!!}!</h3>
        <a href="/logout" class="btn btn-danger">Cerrar sesión</a>
    </div>
</body>
</html>