<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Importando tailwindcss -->
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-900">
        <div class="w-3/4 bg-gray-800 text-white mx-auto mt-8 rounded-lg">
            <x-navbar :tables=$tables />
        </div>
    </body>
</html>
