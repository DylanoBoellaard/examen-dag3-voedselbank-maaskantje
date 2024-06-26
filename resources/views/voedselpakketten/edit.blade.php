<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/scss/wijzig.scss', 'resources/scss/button.scss'])
</head>

<body>
    <main>
        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>'{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form action="/voedselpakket/gezin/{{ $voedselpakket->id }}" method="post">
            @csrf
            @method('put')
            <h3>Wijzig voedselpakket status</h3>

            <div>
                <select name="status" id="selector">
                    <option value="{{ $voedselpakket->status }}">{{ $voedselpakket->status }}</option>
                    <option value="Uitgereikt">Uitgereikt</option>
                    <option value="NietUitgereikt">Niet Uitgereikt</option>
                    <option value="NietMeerGegeven">Niet Meer Gegeven</option>
                </select>
            </div>

            @if (session('status'))
            <div class="alert alert-success">
                <p>{{ session('status') }}</p>
            </div>
            @endif

            <div class="buttons">
                <button class="grey" type="submit">Wijzig status voedselpakket</button>
            </div>
        </form>
        <div>
            <a href="/voedselpakket/gezin/{{ $voedselpakket->gezinId }}"><button class="blue">terug</button></a>
            <a href="/"><button class="blue">home</button></a>
        </div>
    </main>
</body>

</html>