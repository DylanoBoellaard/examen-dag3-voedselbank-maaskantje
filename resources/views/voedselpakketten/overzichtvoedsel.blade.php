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
            @foreach($voedselpakket as $pakket)
            <tr>
                <td>{{ $pakket->pakketnummer }}</td>
                <td>{{ $pakket->datumsamenstelling }}</td>
                @if($pakket->datumuitgifte == null)
                <td>Geen datum</td>
                @else
                <td>{{ $pakket->datumuitgifte }}</td>
                @endif
                <td>{{ $pakket->status }}</td>
                <td>{{ $pakket->voedselpakketpereenheid->sum('aantalproducteneenheden') }}</td>
                <td><a href="/voedselpakket/gezin/{{ $pakket->id }}/edit">Wijzig</a></td>
            </tr>
            @endforeach
        </table>

        <div>
            <a href="/voedselpakket/overzicht"><button>terug</button></a>
            <a href="/"><button>home</button></a>
        </div>
    </main>
</body>

</html>