<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Mijn Taken</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <h1>Mijn Taken</h1>

        <form action="{{ route('taken.store') }}" method="POST">
            @csrf
            <input type="text" name="taak" placeholder="Nieuwe taak toevoegen" required>
            <button type="submit" class="btn">Toevoegen</button>
        </form>

        <ul>
            @foreach ($taken as $taak)
                <li>
                    {{ $taak->naam }}
                    <div>
                        <a href="{{ route('taken.edit', $taak->id) }}" class="btn">Wijzigen</a>
                        <form action="{{ route('taken.destroy', $taak->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn">Verwijderen</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="mt-4">
            <a href="{{ route('dashboard') }}" class="btn">Terug naar Dashboard</a>
        </div>
    </div>
</body>
</html>
