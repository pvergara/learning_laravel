<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <style>
        /*
        Poner bordes a las tablas.
        */
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 5px;
        }
    </style>
</head>
<body>
<a href="{{route('home')}}">Inicio</a>
<a href="{{route('addSong')}}">Agregar</a>
@yield("contain")
<hr>
<p>
    CRUD creado con el framework de php Laravel (versión 9.0)
</p>
</body>
</html>
