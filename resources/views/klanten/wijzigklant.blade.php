<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('klantwijzig') }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="voornaam" value="{{ $klant->voornaam }}" />
        <input type="text" name="tussenvoegsel" value="{{ $klant->tussenvoegsel }}" />
        <input type="text" name="achternaam" value="{{ $klant->achternaam }}" />
        <input type="date" name="geboortedatum" value="{{ $klant->geboortedatum }}" />
        <button type="submit">Update</button>
    </form>
</body>

</html>