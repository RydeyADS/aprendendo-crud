<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PROJETO COM LARAVEL</title>

        @vite('resources/scss/app.scss')
        
    </head>
    <body >
        <button class="btn btn-primary">TESTE</button>
        @vite('resources/js/app.js')

    </body>

</html>
