<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht gezinsallergieën</title>
    @vite(['resources/scss/allergie/global.scss'])
</head>

<body>
    <div class="container">
        <h1 id="title">Allergieën in het gezin</h1>

        <!-- Display family details from database -->
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Gezinsnaam:</th>
                        <th>Omschrijving</th>
                        <th>Totaal aantal Personen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$gezin->naam}}</td>
                        <td>{{$gezin->omschrijving}}</td>
                        <td>{{$gezin->totaalAantalPersonen}}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Displays the success message, if there is any -->
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        <!-- Table to display the person details from database -->
        <table>
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Type Persoon</th>
                    <th>Gezinsrol</th>
                    <th>Allergie</th>
                    <th>Wijzig Allergie</th>
                </tr>
            </thead>
            <tbody>
                @forelse($personen as $persoon) <!-- Foreach / forelse Loop to display all persoon details -->
                <tr>
                    <td>{{$persoon->voornaam}} {{$persoon->tussenvoegsel}} {{$persoon->achternaam}}</td>
                    <td> <!-- Calculate if someone's age is matches any from the if statement. Calculates based on the date of birth -->
                        @php
                        $age = \Carbon\Carbon::parse($persoon->geboortedatum)->age;
                        if ($age >= 18) {
                        echo 'Volwassene';
                        } elseif ($age >= 2) {
                        echo 'Kind';
                        } else {
                        echo 'Baby';
                        }
                        @endphp
                    </td>
                    <td>{{ $persoon->isVertegenwoordiger ? 'Vertegenwoordiger' : 'Lid' }}</td> <!-- Checks a boolean whether someone is a representative or not -->
                    <td>
                        <!-- Check if person has an allergy -->
                        @if($persoon->allergiePerPersoon->isEmpty()) <!-- If person has no allergy, display message -->
                        Geen allergie
                        @else <!-- If person has one or more allergies, display them all -->
                        @foreach($persoon->allergiePerPersoon as $allergiePerPersoon)
                        {{ $allergiePerPersoon->allergie->naam }} <br>
                        @endforeach
                        @endif
                    </td>
                    <td>
                        <a href="{{route('allergie.wijzigen_allergie', [$persoon -> id])}}">
                            <img class="small-img" src="/img/Edit-icon.png" alt="Book-icon.png">
                        </a>
                    </td>
                </tr>
                @empty <!-- If $persoonList is empty... -->
                <tr>
                    <td colspan="7">Er zijn geen gezinnen bekent die de geselecteerde allergie hebben</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div class="flex-row">
            <a href="{{ url()->previous() }}" class="nav-button">Terug</a>
            <a href="{{ route('home') }}" class="nav-button">Home</a>
        </div>
    </div>
</body>

</html>