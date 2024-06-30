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

    .postcode-filter {
        float: right;
        margin-bottom: 20px;
    }

    .form-control {
        height: 40px;
        /* Example height, adjust as needed */
        border-radius: 5px;
        /* Example border-radius, adjust as needed */
        padding: 0 15px;
        /* Adjust padding to match the Home button */
        font-size: 16px;
        /* Adjust font size as needed */
    }

    .submit-btn {
        background-color: #006600;
        color: white;
        border: none;
        /* Assuming the Home button has no border, adjust as needed */
        cursor: pointer;
    }

    .dropdown {
        cursor: pointer;
        border: 1px solid #ccc;
        /* Assuming a light border, adjust as needed */
    }

    h1 {
        color: green;
    }
</style>

<body>
    <h1><u>Overzicht klanten</u></h1>
    <form action="{{ route('klanten.overzicht') }}" method="GET" class="postcode-filter">
        <select name="postcode" class="form-control dropdown">
            <option value="">Selecteer Postcode</option>
            <option value="5271TH">5271TH</option>
            <option value="5271ZE">5271ZE</option>
            <option value="5271TJ">5271TJ</option>
            <option value="5271ZH">5271ZH</option>
        </select>
        <button type="submit" class="form-control submit-btn">Toon Klanten</button>
    </form>
    @if($klant->isEmpty())
    <div style="background-color: #dfdf00; text-align: center; width: 100%; padding: 10px;">
        <p style="margin: 0;">Er zijn geen klanten bekend die de geselecteerde postcode hebben.</p>
    </div>
    @else
    <table style="width: 100%;">
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
            <td><a href="{{ route('klantdetails', ['persoonId' => $klanten->persoonId]) }}">Klant Details</a></td>
        </tr>
        @endforeach
    </table>
    @endif
    <a href="/voedselbank-maaskanje.org" style="background-color: blue; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block; margin-top: 20px;">home</a>
</body>

</html>