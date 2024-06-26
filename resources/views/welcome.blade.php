<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    @vite(['resources/scss/allergie/global.scss'])
</head>

<body>
    <div class="container">
        <h1>Homepage voedselbank maaskantje</h1>
        <a href="{{route('allergie.overzicht_gezinnen')}}">Overzicht gezinsallergieën</a>
    </div>
</body>

</html>