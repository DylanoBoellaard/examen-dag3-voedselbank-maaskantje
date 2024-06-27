@include('./layouts/app')

<h2>Product Details {{$data[0]->Naam}}</h2>

<!-- this is the section for the table on the details page -->
<section class="table-details">
    <table>
        <thead>
            <tr>
                <th>Productnaam</th>
            </tr>
            <tr>
                <th>Houdbaarheidsdatum</th>
            </tr>
            <tr>
                <th>Barcode</th>
            </tr>
            <tr>
                <th>Magazijn locatie</th>
            </tr>
            <tr>
                <th>Ontvangstdatum</th>
            </tr>
            <tr>
                <th>Uitleveringsdatum</th>
            </tr>
            <tr>
                <th>Aantal op voorraad</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$data[0]->Naam}}</td>
            </tr>
            <tr>
                <td>{{date('d-m-Y', strtotime($data[0]->Houdbaarheidsdatum))}}</td>
            </tr>
            <tr>
                <td>{{$data[0]->Barcode}}</td>
            </tr>
            <tr>
                <td>{{$data[0]->Locatie}}</td>
            </tr>
            <tr>
                <td>{{date('d-m-Y', strtotime($data[0]->Ontvangstdatum))}}</td>
            </tr>
            <tr>
                <td>{{date('d-m-Y', strtotime($data[0]->Uitleveringsdatum))}}</td>
            </tr>
            <tr>
                <td>{{$data[0]->Aantal}}</td>
            </tr>
        </tbody>
    </table>
</section>

<!-- these are the links to the edit page but also the home page and the overzicht page -->
<a href="{{route('edit', [$data[0]->id])}}">Wijzig</a>
<a href="{{route('overzicht')}}">terug</a>
<a href="{{route('homepage')}}">home</a>