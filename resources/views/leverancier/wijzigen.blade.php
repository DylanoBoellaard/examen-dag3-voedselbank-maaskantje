<div class="container">
    <h2>Wijzig Houdbaarheidsdatum</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('leverancier.update', $product->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Houdbaarheidsdatum">Houdbaarheidsdatum:</label>
            <input type="date" class="form-control" id="Houdbaarheidsdatum" name="Houdbaarheidsdatum" value="{{ $product->Houdbaarheidsdatum }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Wijzigen</button>
    </form>
</div>
