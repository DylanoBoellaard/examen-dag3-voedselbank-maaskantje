<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
        padding: 10px;
    }
</style>

<body>
    <h1>Overzicht klanten</h1>
    <table>
        <tr>
            <th>Naam Gezin</th>
            <th>Vertegenwoordiger</th>
            <th>Emailadres</th>
            <th>Mobiel</th>
            <th>Adres</th>
            <th>Woonplaats</th>
            <th>Klant Details</th>
        </tr>
        @foreach($klant as $klanten)
        <tr>
            <td>{{$klanten->gezinNaam}}</td>
            <td>{{$klanten->vertegenwoordiger}}</td>
            <td>{{$klanten->email}}</td>
            <td>{{$klanten->mobiel}}</td>
            <td>{{$klanten->adres}}</td>
            <td>{{$klanten->woonplaats}}</td>
        </tr>
        @endforeach
    </table>
    <a href="/klanten/homepage"><u>home</u></a>
</body>

</html>