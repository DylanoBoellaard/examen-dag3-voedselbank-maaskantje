@include('./layouts/app')


<section class="container">
    <section class="title">
        <h2>Wijzig Product Details {{$data[0]->Naam}}</h2>
    </section>
</section>

<section class="succes-text">
    @if(session()->has('succes'))
    <h3>
        {{session('succes')}}
    </h3>
    <script>
        setTimeout(function() {
            window.location.href = "{{route('product_details', [$data[0]->id])}}";
        }, 3000);
    </script>
    @endif
</section>

<section class="error-text">
    @if(session()->has('error'))
    <h3>
        {{session('error')}}
    </h3>
    @endif
</section>

<form action="{{route('update', [$data[0]->id])}}" method="post" class="edit-form">
    @csrf
    @method('put')
    <div>
        <label for="Naam">Productnaam</label>
        <label for="Houdbaarheidsdatum">Houdbaarheidsdatum</label>
        <label for="Barcode">Barcode</label>
        <label for="Locatie">Magazijn locatie</label>
        <label for="Ontvangstdatum">Ontvangstdatum</label>
        <label for="AantalUitgeleleverdeProducten">Aantal uitgeleverde producten</label>
        @if (session()->has('error_message'))
        <label class="active" for="Uitleveringsdatum">Uitleveringsdatum</label>
        @else
        <label for="Uitleveringsdatum">Uitleveringsdatum</label>
        @endif
        <label for="Aantal">Aantal op voorraad</label>
        <input class="submit-edit" type="submit" value="Wijzig Product Details">
    </div>
    <div>
        <input type="text" name="Naam" value="{{$data[0]->Naam}}">
        <input type="text" name="Houdbaarheidsdatum" value="{{date('d-m-Y', strtotime($data[0]->Houdbaarheidsdatum))}}">
        <input type="text" name="Barcode" value="{{$data[0]->Barcode}}">
        <select name="Locatie">
            <option value="{{$data[0]->Locatie}}">{{$data[0]->Locatie}}</option>
        </select>
        <input type="text" name="Ontvangstdatum" value="{{date('d-m-Y', strtotime($data[0]->Ontvangstdatum))}}">
        <input type="text" name="AantalUitgeleleverdeProducten">
        @if(session()->has('error_message'))
        <li class="input-error-message">
            <span>
                {{session('error_message')}}
            </span>
        </li>
        @endif
        <input type="date" name="Uitleveringsdatum" value="{{date('Y-m-d', strtotime($data[0]->Uitleveringsdatum))}}">
        <input type="text" name="Aantal" value="{{$data[0]->Aantal}}">
</form>


<section class="links-edit">
    <!-- these links go to the details page and the homepage -->
    <a href="{{route('product_details', [$data[0]->id])}}">terug</a>
    <a href="{{route('homepage')}}">home</a>
</section>
</div>