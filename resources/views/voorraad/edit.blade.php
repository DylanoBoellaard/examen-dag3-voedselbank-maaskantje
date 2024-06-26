@include('./layouts/app')

<h2>Wijzig Product Details {{$data[0]->Naam}}</h2>

@if(session()->has('succes'))
<h3 class="succes-text">
    {{session('succes')}}
</h3>
<script>
    setTimeout(function() {
        window.location.href = "{{route('product_details', [$data[0]->id])}}";
    }, 3000);
</script>
@endif

@if(session()->has('error'))
<h3 class="succes-text">
    {{session('error')}}
</h3>
@endif

<form action="{{route('update', [$data[0]->id])}}" method="post">
    @csrf
    @method('put')
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
        <label for="AantalUitgeleleverdeProducten">Aantal uitgeleverde producten</label>
        <input type="text" name="AantalUitgeleleverdeProducten">
        @if(session()->has('error_message'))
        <p>
            {{session('error_message')}}
        </p>
        @endif
    </div>
    <div>
        <label for="Uitleveringsdatum">Uitleveringsdatum</label>
        <input type="date" name="Uitleveringsdatum" value="{{date('d-m-Y', strtotime($data[0]->Uitleveringsdatum))}}">
    </div>
    <div>
        <label for="Aantal">Aantal op voorraad</label>
        <input type="text" name="Aantal" value="{{$data[0]->Aantal}}">
    </div>
    <input type="submit" value="Wijzig Product Details">
</form>

<a href="{{route('overzicht')}}">terug</a>
<a href="{{route('homepage')}}">home</a>