<!-- gets the template from the layouts folder -->
@include('./layouts/app')

<div>
    <!-- title of the overzicht page -->
    <h2>Overzicht ProductVoorraden</h2>
    <!-- form for the user to submit when they choose a categorie -->
    <form action="{{route('overzicht')}}" method="post">
        <!-- protection key -->
        @csrf
        <!-- laravel form method to submit -->
        @method('post')
        <!-- select with the name categorie and alot of options to choose from -->
        <select name="categorie">
            <option value="">Selecteer Categorie</option>
            <option value="AGF">AGF</option>
            <option value="KV">KV</option>
            <option value="ZPE">ZPE</option>
            <option value="BB">BB</option>
            <option value="FSKT">FSKT</option>
            <option value="PRW">PRW</option>
            <option value="SSKO">SSKO</option>
            <option value="SKCC">SKCC</option>
            <option value="BVH">BVH</option>
        </select>
        <!-- submits the form -->
        <input type="submit" value="Toon Voorraad">
    </form>
</div>

<section class="table-overzicht">
    <table>
        <thead>
            <!-- table heads for the table columns -->
            <tr>
                <th>Productnaam</th>
                <th>Categorie</th>
                <th>Eenheid</th>
                <th>Aantal</th>
                <th>Houdbaarheidsdatum</th>
                <th>Magazijn</th>
                <th>Voorraad Details</th>
            </tr>
        </thead>
        <tbody>
            <!-- if $data has data then show go through the data and make the rows with the data -->
            @forelse ($data as $voorraad)
            <tr>
                <td>{{$voorraad->Product_naam}}</td>
                <td>{{$voorraad->Categorie_naam}}</td>
                <td>{{$voorraad->VerpakkingsEenheid}}</td>
                <td>{{$voorraad->Aantal}}</td>
                <td>{{date('d-m-Y', strtotime($voorraad->Houdbaarheidsdatum))}}</td>
                <td>{{$voorraad->MagazijnId}}</td>
                <td>
                    <a href="{{route('product_details', [$voorraad->id])}}">
                        <img class="small-img" src="/img/note.png" alt="note.png">
                    </a>
                </td>
            </tr>
            <!-- if $data is empty then show this message under the table -->
            @empty
            <tr>
                <td colspan="7">Er zijn geen producten bekent die behoren bij de geselecteerde productcategorie</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</section>

<!-- link back to the homepage -->
<a href="{{route('homepage')}}">home</a>