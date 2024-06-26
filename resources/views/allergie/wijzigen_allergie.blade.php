<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wijzig allergie</title>
    @vite(['resources/scss/allergie/global.scss'])
</head>

<body>
    <div class="container">
        <h1>Wijzig allergie</h1>

        <!-- Display a success message if there is any -->
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            <p>Redirecting in <span id="countdown">3</span> seconds.</p>
        </div>
        @endif

        <!-- Form to display all allergies from the database, and automatically selects the one the user has -->
        <form action="{{ route('gezin.update_allergie', $persoon->id) }}" method="POST" id="wijzigen-form">
            @csrf
            <select name="allergie_id"> <!-- Dropdown list that displays every allergy and automatically selects the one the user has (or defaults to the topmost allergy) -->
                @foreach($allergieList as $allergie)
                <option value="{{ $allergie->id }}" {{ $persoon->allergiePerPersoon->contains('allergieId', $allergie->id) ? 'selected' : '' }}>
                    {{ $allergie->naam }}
                </option>
                @endforeach
            </select>

            <!-- Displays the anafylactische shock message if it is filled -->
            @if(!$anafylactischMessage == null)
            <div class="alert alert-error" id="anafylactischMessage">
                <p>{{$anafylactischMessage}}</p>
            </div>
            @endif

            

            <div class="flex-row">
                <button type="submit" id="wijzig-submit-button">Wijzig Allergie</button>
                <a href="{{ route('home') }}" class="nav-button">Home</a>
                <a href="{{ route('allergie.overzicht_gezinsallergieen', $persoon->gezinId) }}" class="nav-button">Terug</a>
            </div>
        </form>




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