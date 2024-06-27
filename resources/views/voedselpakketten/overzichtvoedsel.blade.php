<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/scss/layout.scss'])
</head>

<body>
    <main>
        <h3>Overzicht Voedselpakketten</h3>

        <table>
            <tr>
                <th>Naam: </th>
                <td>{{ $gezin->naam }}</td>
            </tr>
            <tr>
                <th>Omschrijving</th>
                <td>{{ $gezin->omschrijving }}</td>
            </tr>
            <tr>
                <th>Totaal aantal Personen</th>
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
            @foreach($voedselpakket as $voedselpakket)
            @foreach($voedselpakket->voedselpakketpereenheid as $eenheid)
            <tr>
                <td>{{ $voedselpakket->pakketnummer }}</td>
                <td>{{ $voedselpakket->datumsamenstelling }}</td>
                @if($voedselpakket->datumuitgifte == null)
                <td>Geen datum</td>
                @else
                <td>{{ $voedselpakket->datumuitgifte }}</td>
                @endif
                <td>{{ $voedselpakket->status }}</td>
                <td>{{ $eenheid->aantalproducteneenheden }}</td>
                <td><a href="">Wijzig</a></td>
            </tr>
            @endforeach
            @endforeach

        </table>
    </main>
</body>

</html>