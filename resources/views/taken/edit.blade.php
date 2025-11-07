<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Wijzig Taak</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <h1>Wijzig Taak</h1>

        <form action="{{ route('taken.update', $taak->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="taak" value="{{ $taak->naam }}" required>
            <button type="submit" class="btn">Opslaan</button>
        </form>

        <div class="mt-4">
            <a href="{{ route('taken.index') }}" class="btn">Terug naar Taken</a>
        </div>
    </div>
</body>
</html>
