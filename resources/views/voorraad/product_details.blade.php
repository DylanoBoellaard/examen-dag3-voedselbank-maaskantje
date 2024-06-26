@include('./layouts/app')

<h2>Product Details {{$data[0]->Naam}}</h2>

<div>
    <label for="Naam">Productnaam</label>
    <input type="text" name="Naam" value="{{$data[0]->Naam}}">
</div>
<div>
    <label for="Houdbaarheidsdatum">Houdbaarheidsdatum</label>
    <input type="text" name="Houdbaarheidsdatum" value="{{$data[0]->Houdbaarheidsdatum}}">
</div>

<div>
    <label for="Barcode">Barcode</label>
    <input type="text" name="Barcode" value="{{$data[0]->Barcode}}">
</div>
<div>
    <label for="Locatie">Magazijn locatie</label>
    <select name="Locatie">
        <option value="{{$data[0]->Locatie}}">{{$data[0]->Locatie}}</option>
    </select>
</div>
<div>
    <label for="Ontvangstdatum">Ontvangstdatum</label>
    <input type="text" name="Ontvangstdatum" value="{{date('d-m-Y', strtotime($data[0]->Ontvangstdatum))}}">
</div>
<div>
    <label for="Uitleveringsdatum">Uitleveringsdatum</label>
    <input type="date" name="Uitleveringsdatum" value="{{date('d-m-Y', strtotime($data[0]->Uitleveringsdatum))}}">
</div>
<div>
    <label for="Aantal">Aantal op voorraad</label>
    <input type="text" name="Aantal" value="{{$data[0]->Aantal}}">
</div>

<a href="{{route('edit', [$data[0]->id])}}">Wijzig</a>
<a href="{{route('overzicht')}}">terug</a>
<a href="{{route('homepage')}}">home</a>