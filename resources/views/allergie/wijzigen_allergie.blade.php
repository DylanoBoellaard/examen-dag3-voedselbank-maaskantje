<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wijzig allergie</title>
    @vite(['resources/scss/allergie/index.scss', 'resources/scss/allergie/global.scss'])
</head>

<body>
    <div class="container">
        <h1>Wijzig allergie</h1>

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            <p>Redirecting in <span id="countdown">3</span> seconds.</p>
        </div>
        @endif

        <!-- Form to display all allergies from the database, and automatically selects the one the user has -->
        <form action="{{ route('gezin.update_allergie', $persoon->id) }}" method="POST">
            @csrf
            <select name="allergie_id"> <!-- Dropdown list that displays every allergy and automatically selects the one the user has (or defaults to the topmost allergy) -->
                @foreach($allergieList as $allergie)
                <option value="{{ $allergie->id }}" {{ $persoon->allergiePerPersoon->contains('allergieId', $allergie->id) ? 'selected' : '' }}>
                    {{ $allergie->naam }}
                </option>
                @endforeach
            </select>
            <button type="submit">Wijzig Allergie</button>
        </form>

        <!-- Displays the anafylactische shock message if it is filled -->
        <p>{{$anafylactischMessage}}</p>

        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('allergie.overzicht_gezinsallergieen', $persoon->gezinId) }}">Terug</a>
    </div>
    <script>
        // Script to redirect to overzicht_gezinsallergieen page after 3 seconds:
        let countdown = 3; // Set the initial countdown time (in seconds)

        // Function to update the countdown
        function updateCountdown() {
            countdown -= 1;
            document.getElementById('countdown').textContent = countdown;

            if (countdown <= 0) {
                // Redirect the user to the homepage the countdown has reached 0 seconds (or less).
                window.location.href = "{{ route('allergie.overzicht_gezinsallergieen', $persoon->gezinId) }}";
            } else {
                // Update the countdown every 1 second
                setTimeout(updateCountdown, 1000);
            }
        }

        // On page load, run function
        document.addEventListener('DOMContentLoaded', function() {
            // Check if there's a success message
            if (document.querySelector('.alert-success')) {
                // Start the countdown, update it every 1 second
                setTimeout(updateCountdown, 1000);
            }
        });
    </script>
</body>

</html>