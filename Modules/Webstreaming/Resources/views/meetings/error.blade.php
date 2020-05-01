<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Error</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            body, html, #meet {
                margin: 0;
                overflow-x: hidden; 
                overflow-y: auto;
            }
        </style>
    </head>
    <body>
        <h1>Error</h1>
        @switch($error)
            @case('notfound')
                <h3>La reunión no existe</h3>
                @break
            @case('max_participants')
                <h3>La reunión no permite más participantes</h3>
                @break
            @case('not_start')
                <h3>La reunión aun no ha inicado</h3>
            @break
            @default
                <h3>Error desconocido</h3>
        @endswitch
    </body>
</html>
