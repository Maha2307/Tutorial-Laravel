<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Wijzig Taak</title>
</head>
<body>
    <h1>Wijzig Taak</h1>
    <form action="/taken/{{ $taak->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="taak" value="{{ $taak->naam }}" required>
        <button type="submit">Opslaan</button>
    </form>
    <a href="/taken">Terug naar taken</a>
</body>
</html>
