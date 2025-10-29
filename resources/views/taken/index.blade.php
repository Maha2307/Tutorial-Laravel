<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Mijn Taken</title>
</head>
<body>
    <h1>Mijn Taken</h1>
    <form action="/taken" method="POST">
        @csrf
        <input type="text" name="taak" placeholder="Nieuwe taak toevoegen" required>
        <button type="submit">Toevoegen</button>
    </form>

    <hr>

    <ul>
        @foreach ($taken as $taak)
            <li>
                {{ $taak->naam }}
                <a href="/taken/{{ $taak->id }}/edit">Wijzigen</a>
                <form action="/taken/{{ $taak->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Verwijderen</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
