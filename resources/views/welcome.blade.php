<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite(['resources/scss/allergie/global.scss'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">
    <div class="container">
        <h1>Homepage voedselbank maaskantje</h1>
        <a href="/overzicht">Overzicht voedselpakketten</a>
        <a href="{{route('allergie.overzicht_gezinnen')}}">Overzicht gezinsallergieën</a>
    </div>
</body>