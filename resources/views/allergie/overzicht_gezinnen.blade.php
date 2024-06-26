<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazijn overzicht</title>
    @vite(['resources/scss/allergie/index.scss', 'resources/scss/allergie/global.scss'])
</head>
<body>
    <div class="container">
        <h1 id="title">Overzicht gezinnen met allergieën</h1>

        <form action="" method="POST">
            @csrf

            <!-- Allergie filter dropdown -->
            <select name="allergie" id="allergie">
                <option value="">Selecteer allergie</option>
                @foreach($allergieList as $allergie)
                <option value="{{ $allergie->id }}" {{ old('allergie', $selectedAllergieId) == $allergie->id ? 'selected' : '' }}>{{ $allergie->naam }}</option>
                @endforeach
            </select>
            <input type="submit" value="Toon Gezinnen">

            <!-- Displays the success message, if there is any -->
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif

            <!-- Table to display the database results -->
            <table>
                <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Omschrijving</th>
                        <th>Volwassenen</th>
                        <th>Kinderen</th>
                        <th>Babys</th>
                        <th>Vertegenwoordiger</th>
                        <th>Allergie Details</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($gezinList as $gezin) <!-- Foreach / forelse Loop to display all family details -->
                    <tr>
                        <td>{{$gezin->gezin_naam}}</td>
                        <td>{{$gezin->omschrijving}}</td>
                        <td>{{$gezin->aantalVolwassenen}}</td>
                        <td>{{$gezin->aantalKinderen}}</td>
                        <td>{{$gezin->aantalBabys}}</td>
                        <td>
                            {{ $gezin->vertegenwoordiger_voornaam }}
                            {{ $gezin->vertegenwoordiger_tussenvoegsel }}
                            {{ $gezin->vertegenwoordiger_achternaam }}
                        </td>
                        <td>
                            <a href="{{route('allergie.overzicht_gezinsallergieen', [$gezin -> id])}}">
                                <img class="small-img" src="/img/Book-icon.png" alt="Book-icon.png">
                            </a>
                        </td>
                    </tr>
                    @empty <!-- If $gezinList is empty... -->
                    <tr>
                        <td colspan="7">Er zijn geen gezinnen bekent die de geselecteerde allergie hebben</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </form>
    </div>
</body>
</html>