<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <h3>Overzicht Voedselpakketten</h3>

        <table>
            <tr>
                <th>Naam: </th>
                <th>Omschrijving</th>
                <th>Totaal aantal Personen</th>
            </tr>
            <tr>
                <td>{{ $gezin->naam }}</td>
                <td>{{ $gezin->omschrijving }}</td>
                <td>{{ $gezin->totaalpersonen }}</td>
            </tr>
        </table>

        <table>
            <tr>
                <th>Pakketnummer</th>
                <th>Datum samenstelling</th>
                <th>Datum uitgifte</th>
                <th>Status</th>
                <th>Aantal producten</th>
                <th>Wijzig Status</th>
            </tr>
            @foreach($pakketten as $pakket)
            <tr>
                <td>{{ $pakket->pakketnummer }}</td>
                <td>{{ $pakket->datumsamenstelling }}</td>
                <td>{{ $pakket->datumuitgifte }}</td>
                <td>{{ $pakket->status }}</td>
                <td></td>
                <td>Wijzig</td>
            </tr>
            @endforeach

        </table>
    </main>
</body>

</html>