<!DOCTYPE html>
<html>
<head>
    <title>Overzicht Product</title>
</head>
<body>
    <h1>Overzicht Product</h1>
    <table>
        <tr>
            <th>Naam</th>
            <th>Leveranciernummer</th>
            <th>LeverancierType</th>
        </tr>
        @php $product = $producten->first(); @endphp
        <tr>
            <td>{{ $product->leverancier_naam }}</td>
            <td>{{ $product->leveranciernummer }}</td>
            <td>{{ $product->leveranciertype }}</td>
        </tr>

    </table>

    <br>
    <table>
        <tr>
            <th>Naam</th>
            <th>Soort Allergie</th>
            <th>Barcode</th>
            <th>Houdbaarheidsdatum</th>
        </tr>
        <!-- Loop through producten and display them in a table -->
        @foreach($producten as $product)
        <tr>
            <td>{{ $product->product_naam}}</td>
            <td>{{ $product->SoortAllergie}}</td>
            <td>{{ $product->Barcode}}</td>
            <td>{{ $product->Houdbaarheidsdatum}}</td>
            <td>
                <a href="{{ route('leverancier.wijzigen', ['id' => $product->product_id]) }}">Wijzigen</a>
            </td>
        </tr>
        @endforeach
        <!--checks if producten is empty of not. if so send error message-->
        @if($producten->isEmpty())
        <tr>
            <td id="error" colspan="4">Er zijn geen producten bekent van de geselecteerde leverancier</td>
        </tr>
        @endif
    </table>
    <a href="{{ route('leverancier.overzicht_leverancier') }}">terug</a>
</body>
</html>
