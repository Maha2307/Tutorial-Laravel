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
            <li>{{ $taak }}</li>
        @endforeach
    </ul>
</body>
</html>
