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
    <table>
        <tr>
            <th>Voornaam</th>
            <td><input type="text" name="voornaam" value="{{ $klant->voornaam ?? 'Default Value' }}" /></td>
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

        </tr>
        <tr>
            <th>Is Vertegenwoordiger</th>

        </tr>
        <tr>
            <th>Straatnaam</th>

        </tr>
        <tr>
            <th>Huisnummer</th>

        </tr>
        <tr>
            <th>Toevoeging</th>

        </tr>
        <tr>
            <th>Postcode</th>

        </tr>
        <tr>
            <th>Woonplaats</th>

        </tr>
        <tr>
            <th>Email</th>

        </tr>
        <tr>
            <th>Mobiel</th>

        </tr>
    </table>
    <button type="submit">Update</button></td>
    @csrf
    @method('PUT')
    </form>
</body>

</html>