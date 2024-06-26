<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Overzicht Leveranciers</h1>
    <table>
        <tr>
            <th>Naam</th>
            <th>ContactPersoon</th>
            <th>Email</th>
            <th>Mobiel</th>
            <th>Leveranciernummer</th>
            <th>LeverancierType</th>
        </tr>
        <!-- Loop through leveranciers and display them in a table -->
        @foreach($leveranciers as $leverancier)
        <tr>
            <td>{{ $leverancier->naam }}</td>
            <td>{{ $leverancier->contactpersoon }}</td>
            <td>{{ $leverancier->email }}</td>
            <td>{{ $leverancier->mobiel }}</td>
            <td>{{ $leverancier->leveranciernummer }}</td>
            <td>{{ $leverancier->leveranciertype }}</td>

            @endforeach
            <!--checks if leverancier is empty of not. if so send error message-->
            @if($leveranciers->isEmpty())
        <tr>
            <td colspan="6">Er zijn geen leveranciers bekent van het geselecteerde leveranciertype</td>
        </tr>
        @endif
        <!-- Form to filter leveranciers by type -->
        <form action="{{ route('leverancier.overzicht_leverancier') }}" method="GET">
            <select name="leveranciertype">
                <option value="">Selecteer Leveranciertype</option>
                @foreach($leverancierTypes as $type)
                <option value="{{ $type }}" {{ $selectedType == $type ? 'selected' : '' }}>{{ $type }}</option>
                @endforeach
            </select>
            <button type="submit">Toon Leveranciers</button>
        </form>
    </table>
</body>
</html>
