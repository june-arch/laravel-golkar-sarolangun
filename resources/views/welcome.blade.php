<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body @class([ 'p-96', 'bg-yellow-50' ])>

        //component
        <x-alert type="error" message="pesan"/>
        //tailwind-css
        <div class="text-9xl font-bold underline">
            Hello, {{ $name }} !
            <p class="text-2xl font-semibold">The Current Unix timestamp is {{ time() }}</p>
        </div>
    </body>
</html>
