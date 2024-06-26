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
    <h1>Klant Details</h1>
    <table>
        <tr>
            <th>Voornaam</th>
            @foreach ($klanten as $klant)
            <td>{{ $klant->voornaam }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Tussenvoegsel</th>
            @foreach ($klanten as $klant)
            <td>{{ $klant->tussenvoegsel }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Achternaam</th>
            @foreach ($klanten as $klant)
            <td>{{ $klant->achternaam }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Geboortedatum</th>
            @foreach ($klanten as $klant)
            <td>{{ $klant->geboortedatum }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Type Persoon</th>
            @foreach ($klanten as $klant)
            <td>{{ $klant->typePersoon }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Is Vertegenwoordiger</th>
            @foreach ($klanten as $klant)
            <td>{{ $klant->isvertegenwoordiger ? 'Ja' : 'Nee' }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Straatnaam</th>
            @foreach ($klanten as $klant)
            <td>{{ $klant->straat }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Huisnummer</th>
            @foreach ($klanten as $klant)
            <td>{{ $klant->huisnummer }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Toevoeging</th>
            @foreach ($klanten as $klant)
            <td>{{ $klant->toevoeging }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Postcode</th>
            @foreach ($klanten as $klant)
            <td>{{ $klant->postcode }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Woonplaats</th>
            @foreach ($klanten as $klant)
            <td>{{ $klant->woonplaats }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Email</th>
            @foreach ($klanten as $klant)
            <td>{{ $klant->email }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Mobiel</th>
            @foreach ($klanten as $klant)
            <td>{{ $klant->mobiel }}</td>
            @endforeach
        </tr>
    </table>
    <a href="{{ route('klantwijzig', ['persoonId' => $klanten->persoonId]) }}" style="background-color: blue; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block; margin-top: 20px;">Edit</a>
</body>

</html>