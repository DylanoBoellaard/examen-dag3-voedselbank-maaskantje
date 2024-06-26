<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/scss/overzicht.scss'])
</head>

<body>
    <main>

        <form action="" method="get">
            <h3>Overzicht gezinnen met voedselpakketten</h3>
            <div>
                <select for="eetwens_id" name="selector" id="selector">
                    <option value="">Selecteer Eetwens</option>
                    @foreach($result as $eetwens)
                    <option value="{{ $eetwens->id }}">{{ $eetwens->naam }}</option>
                    @endforeach
                </select>
                <button type="submit">Toon Gezinnen</button>
            </div>
        </form>

        <div class="layout">

            <table>
                <tr>
                    <th>Gezinsnaam</th>
                    <th>Omschrijving</th>
                    <th>Volwassenen</th>
                    <th>Kinderen</th>
                    <th>Babys</th>
                    <th>Vertegenwoordiger</th>
                    <th>Voedselpakket Details</th>
                </tr>
                @if( $result === null)
                <P>Er zijn geen gezinnen bekent die de geselecteerde eetwens hebben</P>
                @else
                @foreach($gezinnen as $gezin)
                <tr>
                    <td>{{ $gezin->naam }}</td>
                    <td>{{ $gezin->omschrijving }}</td>
                    <td>{{ $gezin->aantalvolwassenen }}</td>
                    <td>{{ $gezin->aantalkinderen }}</td>
                    <td>{{ $gezin->aantalbabys }}</td>
                    <td>{{ $gezin->isvertegenwoordiger }}</td>
                    <td><a href="/gezin/{{ $gezin->gezin_id }}"><svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 224 225" width="224" height="225">
                                <title>boxicon</title>
                                <defs>
                                    <image width="224" height="225" id="img1" href="data:image/png;base64,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" />
                                </defs>
                                <style>
                                </style>
                                <use id="Background" href="#img1" x="0" y="0" />
                            </svg></a></td>
                </tr>
                @endforeach
                @endif
            </table>
        </div>

        <div>
            <a href="/"><button>home</button></a>
        </div>
    </main>


</body>

</html>