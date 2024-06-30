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

    h1 {
        color: green;
    }
</style>

<body>
    <h1><u>Wijzig Klant Details Arjan Bergkamp</u></h1>
    <form action="{{ route('klantwijzig') }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="persoonId" value="8" />
        <input type="hidden" name="contactId" value="2" />
        <table>
            <tr>
                <th><label for="name">Voornaam</label></th>
                <td><input type="text" id="name" name="voornaam" value="{{ $klant->voornaam }}" /></td>
            </tr>
            <tr>
                <th>Tussenvoegsel</th>
                <td><input type="text" name="tussenvoegsel" value="{{ $klant->tussenvoegsel }}" /></td>
            </tr>
            <tr>
                <th>Achternaam</th>
                <td><input type="text" name="achternaam" value="{{ $klant->achternaam }}" /></td>
            </tr>
            <tr>
                <th>Geboortedatum</th>
                <td><input type="date" name="geboortedatum" value="{{ (new DateTime($klant->geboortedatum))->format('Y-m-d') }}" /></td>
            </tr>
            <tr>
                <th>Type Persoon</th>
                <td><input type="text" name="typePersoon" value="{{ $klant->typePersoon }}" readonly /></td>
            </tr>
            <tr>
                <th>Is Vertegenwoordiger</th>
                <td><input type="text" name="isvertegenwoordiger" value="{{ $klant->isvertegenwoordiger }}" readonly /></td>
            </tr>
            <tr>
                <th>Straatnaam</th>
                <td><input type="text" name="straat" value="{{ $klant->straat }}" /></td>
            </tr>
            <tr>
                <th>Huisnummer</th>
                <td><input type="text" name="huisnummer" value="{{ $klant->huisnummer }}" /></td>
            </tr>
            <tr>
                <th>Toevoeging</th>
                <td><input type="text" name="toevoeging" value="{{ $klant->toevoeging }}" /></td>
            </tr>
            <tr>
                <th>Postcode</th>
                <td><input type="text" name="postcode" value="{{ $klant->postcode }}" /></td>
            </tr>
            <tr>
                <th>Woonplaats</th>
                <td><input type="text" name="woonplaats" value="{{ $klant->woonplaats }}" /></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text" name="email" value="{{ $klant->email }}" /></td>
            </tr>
            <tr>
                <th>Mobiel</th>
                <td><input type="text" name="mobiel" value="{{ $klant->mobiel }}" /></td>
            </tr>
        </table>
        <button type="submit">Update</button>
    </form>
</body>

</html>