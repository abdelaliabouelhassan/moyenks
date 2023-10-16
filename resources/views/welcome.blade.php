<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formularz</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class=" bg-white dark:bg-[#111827]">
       <div class=" w-full" id="app">
        <app-form></app-form>
       </div>
    </body>
</html>
